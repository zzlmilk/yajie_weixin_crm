<?php

class weixinEvent{


	function subscribe($info,$array){

		$wechat = new Wechat();

		$type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

		if(!empty($info['subscribe'])){

		   $text = $info['subscribe'] . PHP_EOL.PHP_EOL;

		    foreach ($array as $k => $v) {

		        if (!empty($v) && $v['join'] != '') {

		             $text.=($k) .'.'. $v['name'] . PHP_EOL;
		        }
		    }

		    $wechat->text($text)->reply();
		}

	}


}
?>