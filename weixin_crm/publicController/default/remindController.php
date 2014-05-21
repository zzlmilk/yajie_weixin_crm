<?php

class remindController implements SMS {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('remind');
    }

    public function remind() {
     
        $_ENV['smarty']->display('remind');
    }

    public function sendRemind(){

    	$phone = $_POST['phone'];

    	$user = new userModel();

    	$user->initialize('user_phone like "'.$phone.'"');


    	if($user->vars_number > 0){

    		$toopen_id = $user->vars['user_open_id'];

    		$admin = new adminModel($_SESSION['weixin_crm_user_id']);

    		$company  = new companyModel($admin->vars['compang_id']);

    		if($company->vars_number > 0){

    			$appid = $company->vars['appid'];

    			$secret = $company->vars['app_secret'];

    			$companyToken = new companyTokenModel();

                $token = $companyToken->getToken($admin->vars['compang_id'],$appid,$secret);

                $result = sendCustom($toopen_id,$token,$_POST['content']);

    			if($result['errcode'] == 45015){

                    $state = 2;

                    $msg = '用户未和公众平台 发送消息 ,无法发送给用户 ';

                } elseif($result['errorcode'] == 0){

                    $state = 1;

                    $msg = '发送成功';

                } else{

                    $state = 0;

                }

    			$insertRemindTable['admin_id'] = $_SESSION['weixin_crm_user_id'];

    			$insertRemindTable['remind_content'] = $_POST['content'];

    			$insertRemindTable['remind_phone'] = $phone;

    			$insertRemindTable['remind_time'] = time();

    			$insertRemindTable['remind_state'] = $state;

                $remind = new remindModel();

                $remind->insert($insertRemindTable);


                $_ENV['smarty']->setDirTemplates('');

                $_ENV['smarty']->assign('link',WebSiteUrl.'/pageredirst.php?action=remind&functionname=remind');

                $_ENV['smarty']->assign('message',$msg);

                $_ENV['smarty']->display('message');

    		}

    	}


    }

}

?>
