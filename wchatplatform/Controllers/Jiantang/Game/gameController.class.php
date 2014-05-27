<?php

class gameController extends BaseController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            $this->userOpenId = 'oIUY-tzD2rRdkycAc5ceQjtI1-ok';
        }
        $this->assign('open_id', $this->userOpenId);
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function index() {

        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=' . appid . '&secret=' . secret . '&code=' . $_REQUEST['code'] . '&grant_type=authorization_code';

        $result = transferData($url, "get");

        $array = json_decode($result, true);

        $this->assign('open_id', $array['openid']);

        if (!empty($_REQUEST['action'])) {

            $function = $_REQUEST['action'];

            $this->display_page = $function;

            $this->$function();
        }
    }

    public function gameDa() {

        $this->able_register();

        $giftApi = new giftApi();
        $info = $giftApi->getUserGameRecord($this->userOpenId, 1);

        $error = new errorApi();

        $error->JudgeError($info);
        $this->display('bigWheelPage');
    }

    public function guaguaka() {


        $this->able_register();

        $giftApi = new giftApi();

        $info = $giftApi->getUserGameRecord($this->userOpenId, 2);

        $error = new errorApi();

        $error->JudgeError($info);

        $scratchCard = new scratchCard();

        $ScratchCardResults = $scratchCard->getScratchCardResults();

        $this->assign("websiteurl", WebSiteUrl);
        $this->assign("ScratchCardResults", $ScratchCardResults);
        $this->display();
    }

    public function guaguakaGetLottery() {

        if (isset($_REQUEST['gift_id'])) {
            $scratchCard = new scratchCard();
            $Results = $scratchCard->getScratchCardReceviceAward($this->userOpenId, $_REQUEST['gift_id']);
            if (!empty($Results)) {
                $giftInfo = $scratchCard->getScratchCardInfo($_REQUEST['gift_id']);
                header('Content-type: application/json');
                echo $giftInfo;
            } else {
                echo "1";
            }
        }
    }

    /**
     * 大转盘 ajax 方法
     */
    public function getBigWheel() {

        $resultProJson = transferData(APIURL . '/gift/get_probability_wheel/?source=' . SOURCE . '&open_id=' . $_REQUEST['open_id'], 'get');

        $resultproArray = json_decode($resultProJson, true);



        echo $resultProJson;
    }

    /**
     * 问卷 页面显示
     */
    public function Questionnaire() {

        $this->able_register();

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
        $quesionAll = transferData(APIURL . "/question/get_question/?source=" . SOURCE, "get");

        $quesionResult = json_decode($quesionAll, true);

        return $quesionResult;
    }

    public function getActivity() {

        $ActivityJson = transferData(APIURL . "/activity/get_activity?source=" . SOURCE, "get");

        $ActivityArray = json_decode($ActivityJson, true);

        return $ActivityArray;
    }

    public function uploadQuestion() {

        $postDate["source"] = SOURCE;

        $postDate['open_id'] = $this->userOpenId;

        $postDate['field'] = $_REQUEST['title'];

        $array = explode(',', $_REQUEST['title']);

        foreach ($array as $key => $value) {

            if (empty($_REQUEST[$value])) {

                $state = '第' . $value . '题必须填写';

                echo 'alert("' . $state . '");';

                die;
            }

            $postDate['quesion_' . $value] = $_REQUEST[$value];
        }
        $quesionResultJson = transferData(APIURL . "/question/add_question", "post", $postDate);

        $quesionResultArray = json_decode($quesionResultJson, true);
        $quersionPoint = $quesionResultArray["fraction"];
        if ($quersionPoint >= 71) {
            $message = "您的分数为：" . $quersionPoint . "分<br>您脊椎良好需保持，建议定期脊椎保养。";
        } else if ($quersionPoint >= 51) {
            $message = "您的分数为：" . $quersionPoint . "分<br>您有轻微脊椎问题。";
        } else if ($quersionPoint >= 40) {
            $message = "您的分数为：" . $quersionPoint . "分<br>您有脊椎問題严重。";
        } else {
            $this->displayMessage("统计问卷时出错请重试");
        }
        $message.="<br>&nbsp;&nbsp;以上分数仅限于测试题目结果对比，脊椎问题的诱发原因是多种的，只要身体有各种酸、麻、胀、痛等症状，均有可能是脊椎错位导致的，需通过专业方法检测才能得出最终结果。";
        $this->assign("message", $message);
        $this->display('questionUpload');
//        $url = U('company/user/userCenter', array('open_id' => $_REQUEST['open_id']), 1);
//        echo 'window.location.href="' . $url . '"';
    }

    public function applyAction() {

        $phone = $_REQUEST['user_phone'];

        if (preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/", $phone)) {

            $postDate["source"] = SOURCE;

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

        $codeJson = transferData(APIURL . "/code/get_code?source=" . SOURCE, "get");

        $codeArray = json_decode($codeJson, true);

        return $codeArray;
    }

    public function getGameAward() {


         $gift = new giftApi();


        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['gift_id'])) {

           

            $giftArray = $gift->getGiftInfo($_REQUEST['gift_id'], $_REQUEST['gift_type']);

            $this->setDir('Public');


            $this->assign('type', $_REQUEST['gift_type']);


            if ($_REQUEST['gift_type'] == 1) {



                if(count($giftArray) > 0){


                    $name = '恭喜你,你获得了1张'.$giftArray['gift_name'];

                }  else{


                    $this->getBigWheelText();

                    die;
                }

            } else {




                if(count($giftArray) > 0){


                    $name = '恭喜你,你获得了'.$giftArray['gift_name'];

                }  else{

                      $gift->addCardRecord($_REQUEST['gift_id'], $_REQUEST['open_id'], $_REQUEST['gift_type']);
                     
                      $this->getBigWheelText();

                }

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

        $this->display('result');
    }

    public function getBigWheeSendAward() {


        $this->setDir('Public');

        
        if (!empty($_REQUEST['gift_id']) && !empty($_REQUEST['open_id'])) {

            $gift = new giftApi();
            
            $awardResult = $gift->sendUserGift($_REQUEST['gift_id'], $_REQUEST['open_id'], $_REQUEST['type']);

            $gift->addCardRecord($_REQUEST['gift_id'], $_REQUEST['open_id'], $_REQUEST['type']);



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


                $url = WebSiteUrl . '?g=' . SOURCE . '&a=user&v=changeGoods&goodsId=' . $awardResult['info']['exchange_id'] . '&open_id=' . $_REQUEST['open_id'];

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
        } else {
            $this->assign('title', '提示');
            $this->assign('name', '用户未注册 或  礼品不存在');

            $this->display('result');

            die;
        }
    }

}

?>