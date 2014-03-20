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

}

?>