<?php

class weixinEvent {


    

    function user_logout() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $wechat->text('注销成功！！！')->reply();
    }

    function subscribe($info, $array) {

        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        if (!empty($info['subscribe'])) {

            switch ($info['subscribe']['type']) {

                case 'news':

                    $image_json = json_decode($info['subscribe']['text'], true);

                    $wechat->news($image_json)->reply();

                    die;

                    break;

                case 'text':

                    $text = str_replace('{$open_id}', $open_id, $info['subscribe']['text']);

                    $wechat->text($text)->reply();

                    die;

                    break;

                case 'php':

                    $functions = $array['name'];

                    $weixinEvent = new weixinEvent();

                    $weixinEvent->$functions();
                    die;

                    break;

                default :
                    $this->text($info['subscribe']['text'])->reply();
            }
        }
    }

    function test() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $data['open_id'] = $userCode;

        $data['source'] = SOURCE;

        $result = transferData(APIURL . '/user/add', 'post', $data);

        $wechat->text($result)->reply();
    }

    function register() {

        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '成为会员', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g='.SOURCE.'&a=user&v=ativating&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function order() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '消费记录', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g='.SOURCE.'&a=user&v=userExpense&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function getExchangeList() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '我要兑换', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g='.SOURCE.'&a=exchange&v=getExchangeList&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function wodezhongxin() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '我的中心', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g='.SOURCE.'&a=user&v=userCenter&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function jinqihuodong() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '近期活动', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g='.SOURCE.'&a=game&v=activity&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

   


    function lianxifangshi() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '电话:0112312351625367';
        $wechat->text($text)->reply();
    }

}

?>