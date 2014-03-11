<?php

class userController implements User {

    // 用户列表 界面
    public function userList() {
        $userModel = new userModel();
        $userModel->initialize();
        $result = $userModel->vars_all;
        $_ENV['smarty']->setDirTemplates('user');
        $_ENV['smarty']->assign('userInfo', $result);
        $_ENV['smarty']->display('userList');
    }

    public function userEdit() {
        $errorFlag = true;
        if (isset($_GET['userId'])) {
            $userId = $_GET['userId'];
            $userModel = new userModel();
            $userModel->initialize("user_id=$userId");
            $userCount = $userModel->vars_number;
            if ($userCount > 0) {
                $userData = $userModel->vars;
            } else {
                $errorFlag = FALSE;
                $errorMessage = "未搜索到该用户请刷新后重试";
            }
        } else {
            $errorFlag = FALSE;
            $errorMessage = "非法的登入请重试";
        }
        $_ENV['smarty']->setDirTemplates('user');
        $returnData = $errorFlag ? $userData : $errorMessage;
        $_ENV['smarty']->assign('userData', $returnData);
        $_ENV['smarty']->assign('errorFlag', $errorFlag);
        $_ENV['smarty']->display('userEdit');
    }

    public function userUpdata() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST)) {
                $userId=$_POST['user_id'];
                $upDatas['user_name']       =   $_POST['user_name'];
                $upDatas['user_phone']      =   $_POST['user_phone'];
                $upDatas['birthday']        =   $_POST['birthday'];
                $upDatas['sex']             =   $_POST['sex'];
                $upDatas['user_money']      =   $_POST['user_money'];
                $upDatas['user_integration'] =  $_POST['user_integration'];
                $this->updateUser($upDatas,$userId);
                $this->userList();
            } else {
                
            }
        } else {
            
        }
    }

    public function addUser($data) {

        if (is_array($data) && count($data) > 0) {

            $userModel = new userModel();

          $returnVal=  $userModel->insert($data);
          return $returnVal;
        }
    }

    public function updateUser($data, $user_id) {

        if (is_array($data) && count($data) > 0) {

            $userModel = new userModel();

            $userModel->initialize('user_id = ' . $user_id);

            if ($userModel->vars_number > 0) {

                $userModel->update($data);
            }
        }
    }

    public function deleteUser($user_id) {
        
    }

    public function searchUser() {
        
    }

    /**
     * 增加用户积分
     *
     * user_id  int  用户id
     *
     * pointer  int   需要增加的积分
     */
    public function addPointer($user_id, $integration) {

        $user = new userModel();

        $user->initialize('user_id = ' . $user_id);

        if ($user->vars_number > 0) {

            $user->vars['user_integration']+=$pointer;

            $user_pointer_record = new userPointerRecordModel();

            $record['user_id'] = $user_id;

            $record['record_type'] = 1;

            $record['fraction'] = $integration;

            $record['source'] = 'crm';

            $record['create_time'] = time();

            $user_pointer_record->insert($record);
        }
    }

    public function addMoney($user_id, $money) {


        $user = new userModel();

        $user->initialize('user_id = ' . $user_id);

        if ($user->vars_number > 0) {

            $user->vars['user_money']+=$money;

            $user->updateVars();

            $user_pointer_record = new userPointerRecordModel();

            $record['user_id'] = $user_id;

            $record['record_type'] = 2;

            $record['fraction'] = $integration;

            $record['source'] = 'crm';

            $record['create_time'] = time();

            $user_pointer_record->insert($record);
        }
    }

}

?>