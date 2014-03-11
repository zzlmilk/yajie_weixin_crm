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

    //编辑用户信息
    public function userEdit() {
        $errorFlag = true;
        if (isset($_GET['userId'])) {
            $userId = $_GET['userId'];
            $userModel = new userModel();
            $userModel->initialize("user_id=$userId");
            $userCount = $userModel->vars_number;
            if ($userCount > 0) {
                $userData = $userModel->vars;
                $userPointerRecord = new userPointerRecordModel();
                $userPointerRecord->initialize("user_id='$userId' and record_type=1");
                if ($userPointerRecord->vars_number > 0) {
                    $userPointData = $userPointerRecord->vars_all;
                } else {
                    $userPointData = 0;
                }
                $userPointerRecord->initialize("user_id='$userId' and record_type=2");
                if ($userPointerRecord->vars_number > 0) {
                    $userMoneyData = $userPointerRecord->vars_all;
                } else {
                    $userMoneyData = 0;
                }
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
        $_ENV['smarty']->assign('userPointData', $userPointData);
        $_ENV['smarty']->assign('userMoneyData', $userMoneyData);
        $_ENV['smarty']->assign('errorFlag', $errorFlag);
        $_ENV['smarty']->display('userEdit');
    }

//提交更新的用户信息
    public function userUpdata() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST)) {
                $userId = $_POST['user_id'];
                $upDatas['user_name'] = $_POST['user_name'];
                $upDatas['user_phone'] = $_POST['user_phone'];
                $upDatas['birthday'] = $_POST['birthday'];
                $upDatas['sex'] = $_POST['sex'];
                $upDatas['user_money'] = $_POST['user_money'];
                $upDatas['user_integration'] = $_POST['user_integration'];
                $this->updateUser($upDatas, $userId);
                $this->userList();
            } else {
                
            }
        } else {
            
        }
    }

    //积分信息界面
    public function pointManage() {
        $userModel = new userModel();
        $userModel->initialize();
        $result = $userModel->vars_all;
        $_ENV['smarty']->setDirTemplates('user');
        $_ENV['smarty']->assign('userInfo', $result);
        $_ENV['smarty']->display('pointManage');
    }

    public function moneyManage() {
        $userModel = new userModel();
        $userModel->initialize();
        $result = $userModel->vars_all;
        $_ENV['smarty']->setDirTemplates('user');
        $_ENV['smarty']->assign('userInfo', $result);
        $_ENV['smarty']->display('moneyManage');
    }

    public function moneyConturl() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["moneyNumber"] >= 0) {
                $userId = $_POST['userId'];
                $moneyNumber = $_POST['moneyNumber'];
                switch ($_POST["moneyType"]) {
                    case "deductMoney":
                        $moneyConturlRequest = $this->addMoney($userId, $moneyNumber * (-1));
                        break;
                    case "recharge":
                        $moneyConturlRequest = $this->addMoney($userId, $moneyNumber);
                        break;
                }
                if ($moneyConturlRequest > 0) {
                    echo "操作成功！";
                    $this->moneyManage();
                }
            } else {
                
            }
        }
    }

    public function addUser($data) {

        if (is_array($data) && count($data) > 0) {

            $userModel = new userModel();
<<<<<<< HEAD
=======

>>>>>>> 6864e0808c4da8677bb4bebf5e7dfa5d35f3664d

            $returnVal = $userModel->insert($data);
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
        
        if(!empty($user_id) && $user_id > 0 ){

            $user = new userModel();

            $user->initialize('user_id = '.$user_id);

            if($user->vars_number > 0 ){

                $user_pointer_record = new userPointerRecordModel();

                $user_pointer_record->deleteRecord($user_id);

            }

        }
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

        if(!empty($user_id) && $user_id >0 && $integration > 0){

            $user = new userModel();

            $user->initialize('user_id = ' . $user_id);

            if ($user->vars_number > 0) {

                $user->vars['user_integration']+=$integration;

                $user_pointer_record = new userPointerRecordModel();

                $user_pointer_record->addRecord($user_id,1,$integration,'crm');
            }

        }

    }
    /**
     *  添加充值金额
     *  user_id  int   用户id  
     *  money    int   增加的充值金额
     */

    public function addMoney($user_id, $money) {

        if($user_id > 0  && !empty($user_id) && $money >0 ){

            $user = new userModel();

            $user->initialize('user_id = ' . $user_id);

            if ($user->vars_number > 0) {

                $user->vars['user_money']+=$money;

                $user->updateVars();

                $user_pointer_record = new userPointerRecordModel();

                $user_pointer_record->addRecord($user_id,2,$money,'crm');
            }

        }
    }

    /**
     * 减少用户积分
     * user_id  int  用户id  intergration  int 用户积分 
     */
    public function  reductionPointer($user_id,$integration){

        if(!empty($user_id) &&  $user_id > 0  && $integration > 0 ){

            $user = new userModel();

            $user->initialize('user_id = '.$user_id);

            if($user->vars_number > 0 ){

                $userPointer = $user->vars['user_integration'] -  $integration;

                if($userPointer < 0){

                    $userPointer = 0;

                }

                $user->vars['user_integration'] = $userPointer;

<<<<<<< HEAD
            $record['fraction'] = $money;
=======
                $user->updateVars();
>>>>>>> 6864e0808c4da8677bb4bebf5e7dfa5d35f3664d

            }

        }
    }

     /**
     * 减少用户金额
     * user_id  int  用户id  money  int 用户积分 
     */
    public function  reductionMoney($user_id,$money){

        if(!empty($user_id) &&  $user_id > 0  && $money > 0 ){

            $user = new userModel();

            $user->initialize('user_id = '.$user_id);

            if($user->vars_number > 0 ){

                $userMoney = $user->vars['user_money'] -  $money;

                if($userMoney < 0){

                    $userMoney = 0;

                }

                $user->vars['user_money'] = $userMoney;

                $user->updateVars();

            }

        }
    }

}

?>