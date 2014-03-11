<?php

class userController implements User {

    // 用户列表 界面
    public function userList() {
          $userModel = new userModel();
        $userModel->initialize();
        $result = $userModel->vars_all;
        var_dump($result);
        $_ENV['smarty']->setDirTemplates('user');
        $_ENV['smarty']->assign('userInfo', $result);
        $_ENV['smarty']->display('userList');
    }

    public function addUser($data) {

        if (is_array($data) && count($data) > 0) {

            $userModel = new userModel();


            $userModel->insert($data);
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

                $user->updateVars();

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