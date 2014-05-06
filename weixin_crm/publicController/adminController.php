<?php

class adminController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('admin');
    }

    public function admin() {
      //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $adminModel = new adminModel();
        $adminModel->initialize('admin_id = '.$_SESSION['weixin_crm_user_id']);
        $resultArry = $adminModel->vars;
        $str = $resultArry['admin_auth'];
        $lastTime = $resultArry['last_time'];
        $authArray = explode(",",$str);

        $authDetail = new authDetailModel();

        for ($i=0; $i < count($authArray); $i++) { 
          $authDetail->initialize('value = '.$authArray[$i]);
          $authInfoArray = $authDetail->vars;
          $authDetail->clearUp();
          $baey[] = $authInfoArray['name'];
        }
       // print_r($baey);

        $_ENV['smarty']->assign('authInfo', $baey);
        $_ENV['smarty']->assign('lastTime', $lastTime);

        $_ENV['smarty']->display('admin');
    }

      public function setAccount() {
      //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $_ENV['smarty']->display('setAccount');
    }

}

?>
