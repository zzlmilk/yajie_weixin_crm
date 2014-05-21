<?php

class loginController {

    // 用户列表 界面

    public function login() {

        $_ENV['smarty']->setDirTemplates('');

        $_ENV['smarty']->display('login');
    }

    public function loginAction(){

    	
    	$admin = new adminModel();

	    $ad['account'] = $_POST['user'];

	    $ad['account_password'] = $_POST['password'];

	    $admin->initialize($ad);

	    if ($admin->vars_number > 0) {

	        $souce = $admin->vars['compang_id'];

	        $company = new companyModel();

	        $company->initialize('company_id = ' . $souce);

	        $token = strtolower($company->vars['company_token']);

	        $admin->vars['last_time'] = date('Y-m-d H:i:s');

	        $admin->updateVars();

	        if($token == $_SESSION['weixin_crm_source'] || $souce == 0){

	            $_SESSION['weixin_crm_user_id'] = $admin->vars['admin_id'];

	            $_SESSION['weixin_crm_user_name'] = $admin->vars['admin_name'];


	            $_SESSION['weixin_user_account'] = $admin->vars['account'];

	             echo '<script type="text/javascript">window.location="' . WebSiteUrl .'/'.$_SESSION['weixin_crm_source']. '";</script>';

	        }  else{


	            echo '<script type="text/javascript">alert("账号和公司无法配对 请联系管理员");window.location="' . WebSiteUrl . '/'.$_SESSION['weixin_crm_source'].'";</script>';

	        }
	    } else {
	        echo '<script type="text/javascript">alert("用户名或密码错误！");window.location="' . WebSiteUrl . '/'.$_SESSION['weixin_crm_source']. '";</script>';
	    }
	}


    public function logout(){

    	 $soruce = $_SESSION['weixin_crm_source'];

	     session_unset();

	     echo '<script type="text/javascript">window.location.href="' . WebSiteUrl .'/'.$soruce. '";</script>';

    }

}

?>