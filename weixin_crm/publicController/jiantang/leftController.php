<?php

class leftController {

    // 用户列表 界面

    public function left() {

        
       
        $admin = new adminModel($_SESSION['weixin_crm_user_id']);
        
        $mainContent = $admin->admin_auth($admin->vars['admin_auth']);
        
       
        $_ENV['smarty']->assign('auth_result', $mainContent);



        $_ENV['smarty']->setDirTemplates('');

        $_ENV['smarty']->display('left');
    }

}

?>