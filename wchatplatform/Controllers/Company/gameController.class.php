<?php

class gameController extends BaseController {

    private $userOpenId;

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            $this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';
        }
        $this->assign('open_id', $this->userOpenId);
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function index() {

        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx1273344d7b97cd07&secret=65f0ce66ed3b65ef8aebd7ae3ea92e5c&code=' . $_REQUEST['code'] . '&grant_type=authorization_code';

        $result = transferData($url, "get");

        $array = json_decode($result, true);

        $this->assign('open_id', $array['openid']);

        if (!empty($_REQUEST['action'])) {

            $function = $_REQUEST['action'];

            $this->display_page = $function;

            $this->$function();
        }
    }

    public function bigWheelPage() {


        $this->display();
    }

    public function guaguaka() {

        $this->display();
    }

    /**
     * 大转盘 ajax 方法
     */
    public function getBigWheel() {

        $resultProJson = transferData(APIURL . '/gift/get_probability_wheel/?source=1234', 'get');

        $resultproArray = json_decode($resultProJson, true);


        echo $resultProJson;
    }

    /**
     * 问卷 页面显示
     */
    public function Questionnaire() {

        $all = $this->getQuesion();

        $this->assign('info', $all['question']);

        $this->assign('title', $all['title']);

        $this->display();
    }

    /**
     * 活动页面
     */
    public function activity() {

        $info = $this->getActivity();

        $this->assign('today_time', mktime(0, 0, 0));
        $this->assign('info', $info['info']);
        $this->assign('record', $info['record']);
        $this->display('activity');
    }

    public function getQuesion() {

        $quesionAll = transferData(APIURL . "/question/get_question", "get");

        $quesionResult = json_decode($quesionAll, true);

        return $quesionResult;
    }

    public function getActivity() {

        $ActivityJson = transferData(APIURL . "/activity/get_activity?source=company", "get");

        $ActivityArray = json_decode($ActivityJson, true);

        return $ActivityArray;
    }

    public function uploadQuestion() {

        $postDate["source"] = "company";

        $postDate['open_id'] = $this->userOpenId;

        $postDate['field'] = $_REQUEST['title'];

        $array = explode(',', $_REQUEST['title']);

        foreach ($array as $key => $value) {

            if (empty($_REQUEST[$value])) {

                echo '第' . $value . '题必须填写';

                die;
            }

            $postDate['quesion_' . $value] = $_REQUEST[$value];
        }

        $quesionResultJson = transferData(APIURL . "/question/add_question", "post", $postDate);

        $quesionResultArray = json_decode($quesionResultJson, true);

        echo 'success';
    }

    public function applyAction() {

        $phone = $_REQUEST['user_phone'];

        if (preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/", $phone)) {

            $postDate["source"] = "company";

            $postDate['user_phone'] = $phone;

            $postDate['real_name'] = $_REQUEST['real_name'];

            $postDate['activity_id'] = $_REQUEST['id'];

            $applyResultJson = transferData(APIURL . "/apply/addApply", "post", $postDate);

            $applyResultArray = json_decode($applyResultJson, true);

            $this->activity();
        } else {

            echo '手机号码错误';
        }
    }

    public function code() {

        $code = $this->getRandCode();

        echo $code['code_name'];
    }

    public function getRandCode() {

        $codeJson = transferData(APIURL . "/code/get_code?source=company", "get");

        $codeArray = json_decode($codeJson, true);

        return $codeArray;
    }

    public function getBigWheelAward() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['gift_id'])) {

            $gift = new giftApi();

            $giftArray = $gift->getGiftInfo($_REQUEST['gift_id'], 1);

            $this->setDir('Public');

            switch ($_REQUEST['gift_id']) {

                case '1':
                    $name = '恭喜你,你获得了1等奖';
                    break;
                case '5':
                    $name = '恭喜你,你获得了2等奖';
                    break;
                case '9':
                    $name = '恭喜你,你获得了3等奖';
                    break;
            }

            $this->assign('title', '领奖页面');

            $this->assign('name', $name);

            $this->assign('gift_id', $_REQUEST['gift_id']);

            $this->assign('open_id', $_REQUEST['open_id']);

            $this->display('success');
        }
    }

    public function getBigWheelText() {

        $this->setDir('Public');

        $this->assign('title', '提示');

        $this->assign('name', '谢谢您的参与，下次再接再厉');

        $this->display('success');
    }

    public function getBigWheeSendAward() {


        $this->setDir('Public');
        if (!empty($_REQUEST['gift_id']) && !empty($_REQUEST['open_id'])) {
            $gift = new giftApi();

            $awardResult = $gift->sendUserGift($_REQUEST['gift_id'], $_REQUEST['open_id'], 1);


            /**
             * 如存在 则 兑换的内容为虚拟的内容
             */
            if (!empty($awardResult['exchange_record'])) {

                $this->assign('title', '领取结果');

                $this->assign('name', '恭喜你 你兑换了一个虚拟的物品');

                $this->display('result');

                die;
            }

            if (!empty($awardResult['jump'])) {


                $url = WebSiteUrl . '?g=company&a=user&v=changeGoods&goodsId=' . $awardResult['info']['exchange_id'] . '&open_id=' . $_REQUEST['open_id'];

                echo '<script>window.location.href="' . $url . '"</script>';

                die;
            }

            /**
             * 如存在 则标示 用户领取的 为积分
             */
            if (!empty($awardResult['user']['user_integration'])) {

                $this->assign('title', '领取结果');
                $this->assign('name', '恭喜你 你获得了' . $awardResult['record']['fraction'] . '积分');

                $this->display('result');

                die;
            }


            /**
             * 优惠券
             */
            if (!empty($awardResult['code']['promo_code_id'])) {

                $this->assign('title', '领取结果');
                $this->assign('name', '恭喜你 你获得了优惠券 优惠码为' . $awardResult['code']['code_name']);

                $this->display('result');

                die;
            }
        }
    }

}

?>