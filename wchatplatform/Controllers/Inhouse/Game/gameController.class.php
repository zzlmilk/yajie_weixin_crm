<?php

class gameController extends BaseController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            //$this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';
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

    public function getActivity() {

        $ActivityJson = transferData(APIURL . "/activity/get_activity?source=" . SOURCE, "get");

        $ActivityArray = json_decode($ActivityJson, true);

        return $ActivityArray;
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
            $this->displayMessage("恭喜报名成功",1);
//            $this->activity();
        } else {

            $this->displayMessage("手机号码错误");
        }
    }

}

?>