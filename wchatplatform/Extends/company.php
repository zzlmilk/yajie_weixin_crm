<?php

class weixinEvent {


	

	function user_logout(){


		$wechat = new Wechat();

		$type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $wechat->text('注销成功！！！')->reply();


	}
	
	function subscribe($info,$array){

		$wechat = new Wechat();

		$type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

		if(!empty($info['subscribe'])){

		    // $text = $info['subscribe'];
		  
		    // $wechat->text($text)->reply();


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

	function test(){


		$wechat = new Wechat();

		$type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $data['open_id'] = $userCode;

        $data['source'] = 'company';

        $result = transferData(APIURL.'/user/add','post',$data);


        $wechat->text($result)->reply();

	}

    function register(){


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
         $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Duser%26v%3Dindex%26action%3Dregister&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';

         $wechat->text($text)->reply();        
    }

    function order(){

        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Duser%26v%3Dindex%26action%3Dorder&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply();   
    }

    function getExchangeList(){


         $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Duser%26v%3Dindex%26action%3DgetExchangeList&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply();   


    }

    function qiandao(){


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Duser%26v%3Dindex%26action%3Duserlogin&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply(); 
        
    }

    function wodezhongxin(){


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Duser%26v%3Dindex%26action%3DuserCenter&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply();  
    }
    function jinqihuodong(){


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Dgame%26v%3Dindex%26action%3Dactivity&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply();  
    }

    function dazhuanpan(){
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Dgame%26v%3Dindex%26action%3DbigWheelPage&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply();  
    }

     function guaguaka(){
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Dgame%26v%3Dindex%26action%3Dguaguaka&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply();  
    }


     function wenjuan(){
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dtest%26a%3Dgame%26v%3Dindex%26action%3DQuestionnaire&response_type=code&scope=snsapi_base&state=123#wechat_redirect">请点击这里</a>';
        $wechat->text($text)->reply();  
    }

    function lianxifangshi(){


         $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '电话:0112312351625367';
        $wechat->text($text)->reply();  

    }

     

}

?>