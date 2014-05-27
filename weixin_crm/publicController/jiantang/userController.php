<?php

class userController implements User {

    public $errorMessage = "";
    public $pageSize = 5;

    // 用户列表 界面
    public function userList() {
        $pageSize = $this->pageSize;
        $userModel = new userModel();
        $userModel->addOrderBy("create_time desc");
        $userModel->initialize();
        $userNumber = $userModel->vars_number;
        $userModel->addOffset(0, $pageSize);
        $userModel->initialize();
        $result = $userModel->vars_all;
        foreach ($result as $k => $v) {
            $v["birthday"] = date("Y", time()) - date("Y", $v["birthday"]);
            $result[$k]["birthday"] = $v["birthday"];
        }
        $_ENV['smarty']->setDirTemplates('user');
        $_ENV['smarty']->assign('userInfo', $result);
        $url = WebSiteUrl . "/pageredirst.php?action=user&functionname=userListPage";
        $page = $_ENV['smarty']->getPages($url, 1, $userNumber, $pageSize);
        $_ENV['smarty']->assign('pages', $page);
        $_ENV['smarty']->assign('errorMessage', $this->errorMessage);
        $_ENV['smarty']->display('userList');
    }

    //查询用户
    public function seachUsers() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errorFlag = true;
            if (!empty($_POST['selectText'])) {
                $phone = trim($_POST['selectText']);
                if (!ctype_digit($phone)) {
                    $phoneCache = explode("-", $phone);
                    foreach ($phoneCache as $phoneNumber) {
                        $intPhone.=$phoneNumber;
                    }
                    $phone = $intPhone;
                }
                if (!ctype_digit($phone)) {
                    $this->errorMessage = "手机号码格式不正确，请以13955555555或 139-555-55555形式查询";
                } else {
                    $userModel = new userModel();
                    $userModel->initialize("user_phone = '" . $phone . "'");
                    if ($userModel->vars_number == 1) {
                        $reVal = $userModel->vars_all;
//                        $_GET['userId'] = $reVal[0]["user_id"];
                        foreach ($reVal as $k => $v) {
                            $v["birthday"] = date("Y", time()) - date("Y", $v["birthday"]);
                            $reVal[$k]["birthday"] = $v["birthday"];
                        }
                        $errorFlag = false;
                    } else {
                        $this->errorMessage = "未找到对应的手机号码请确认后重新输入";
                    }
                }
            } else {
                $this->errorMessage = "手机号码不能为空，请确认后重新输入";
            }
        }
        if ($errorFlag) {
            $this->userList();
        } else {
            $_ENV['smarty']->setDirTemplates('user');
            $_ENV['smarty']->assign('userInfo', $reVal);
            $_ENV['smarty']->display('userList');
        }
    }

//用户界面分页
    public function userListPage() {
        if (isset($_GET["page"])) {
            $pageSize = $this->pageSize;
            $pageNumber = $_GET["page"];
            $userModel = new userModel();
            $userModel->addOrderBy("create_time desc");
            $userModel->initialize();
            $userNumber = $userModel->vars_number;
            $dateCount = $pageSize * ($pageNumber - 1);
            $userModel->addOffset($dateCount, $pageSize);
            $userModel->initialize();
            $result = $userModel->vars_all;
            foreach ($result as $k => $v) {
                $v["birthday"] = date("Y", time()) - date("Y", $v["birthday"]);
                $result[$k]["birthday"] = $v["birthday"];
            }
            $_ENV['smarty']->setDirTemplates('user');
            $_ENV['smarty']->assign('userInfo', $result);
            $url = WebSiteUrl . "/pageredirst.php?action=user&functionname=userListPage";
            $page = $_ENV['smarty']->getPages($url, $pageNumber, $userNumber, $pageSize);
            $_ENV['smarty']->assign('pages', $page);

            $_ENV['smarty']->display('userList');
        } else {
            $this->userList();
        }
    }

    //显示用户搜索页面
    public function pointAndMoneyManage() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $phone = trim($_POST['userPhone']);
            if (!ctype_digit($phone)) {
                $phoneCache = explode("-", $phone);
                foreach ($phoneCache as $phoneNumber) {
                    $intPhone.=$phoneNumber;
                }
                $phone = $intPhone;
            }
            if (!ctype_digit($phone)) {
                echo "2";
                die;
//                $this->errorMessage = "手机号码格式不正确，请以13955555555或 139-555-55555形式查询";
            }
            $userModel = new userModel();
            $userModel->initialize("user_phone = '" . $phone . "'");

            $result = $userModel->vars;
            if ($userModel->vars_number <= 0) {
                echo "1";
            } else {
                header('Content-type: application/json');
                $jsonResult = json_encode($result);
                echo $jsonResult;
            }
        } else {
            $userPointerRecordModel = new userPointerRecordModel();
            $userPointerRecordModel->addOffset(0, 5);
            $joinString = ' LEFT JOIN user ON user_points_record.user_id = user.user_id ';
            $userPointerRecordModel->addJoin($joinString);
            $userPointerRecordModel->addOrderBy("record_id desc");
            $userPointerRecordModel->addSelect("*,user_points_record.source as source,user_points_record.create_time as create_time");
            $userPointerRecordModel->initialize();
            $pointRecordShow = $userPointerRecordModel->vars_all;


            $_ENV['smarty']->setDirTemplates('user');
            $_ENV['smarty']->assign('pointRecordData', $pointRecordShow);
            $_ENV['smarty']->display('manageView');
        }
    }

    //用户分数&余额加减
    public function contrulUserResource() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $resourceNumber = $_POST["resourceNumber"];
            if ((empty($resourceNumber) || !ctype_digit($resourceNumber)) && $resourceNumber != "0") {
                echo "numberError";
            } else {
                $userId = $_POST['postUserId'];
                $conturlType = $_POST['conturlType'];
                switch ($conturlType) {
                    case "addPoint":
                        $this->addPointer($userId, $resourceNumber);
                        break;
                    case "minPoint":
                        $this->reductionPointer($userId, $resourceNumber);
                        break;
                    case "addMoney":
                        $this->addMoney($userId, $resourceNumber);
                        break;
                    case "minMoney":
                        $this->reductionMoney($userId, $resourceNumber);
                        break;
                }
                $userPointerRecordModel = new userPointerRecordModel();
                $userPointerRecordModel->addOffset(0, 5);
                $joinString = ' LEFT JOIN user ON user_points_record.user_id = user.user_id ';
                $userPointerRecordModel->addSelect("*,user_points_record.source as source,user_points_record.create_time as create_time");
                $userPointerRecordModel->addJoin($joinString);
                $userPointerRecordModel->addOrderBy("record_id desc");
                $userPointerRecordModel->initialize();
                $pointRecordShow = $userPointerRecordModel->vars_all;
                header('Content-type: application/json');
                $rerurnArray['resourceNumber'] = $resourceNumber;
                $rerurnArray['conturlType'] = $conturlType;
                $rerurnArray['recordList'] = $pointRecordShow;
                $jsonReturn = json_encode($rerurnArray);
                echo $jsonReturn;
            }
        }
    }

    //编辑用户信息
    public function userEdit() {
        $errorFlag = true;
        $pageSize = $this->pageSize;
        if (isset($_GET['userId'])) {
            $userId = $_GET['userId'];
            $userModel = new userModel();
            $userModel->initialize("user_id=$userId");
            $userCount = $userModel->vars_number;
            if ($userCount > 0) {
                $userData = $userModel->vars;
                $userPointerRecord = new userPointerRecordModel();
                $userPointerRecord->initialize("user_id='$userId' and record_type=1");
                $pointerNumber = $userPointerRecord->vars_number;
                if ($pointerNumber > 0) {
                    $userPointerRecord->addOffset(0, $pageSize);
                    $userPointerRecord->initialize();
                    $userPointData = $userPointerRecord->vars_all;
                    $url = WebSiteUrl . "/pageredirst.php?action=user&functionname=userPoniterPage&userId=" . $userId;
                    $pagePointer = $_ENV['smarty']->getPages($url, 1, $pointerNumber, $pageSize, 1);
                    $_ENV['smarty']->assign('pagePointer', $pagePointer);
                } else {
                    $userPointData = 0;
                }
                $userMoneyRecord = new userPointerRecordModel();
                $userMoneyRecord->addCondition("user_id='$userId' and record_type=2", 1);
                $userMoneyRecord->initialize();
                $moneyNumber = $userMoneyRecord->vars_number;
                if ($moneyNumber > 0) {
                    $userMoneyRecord->addOffset(0, $pageSize);
                    $userMoneyRecord->initialize();
                    $userMoneyData = $userMoneyRecord->vars_all;
                    $url = WebSiteUrl . "/pageredirst.php?action=user&functionname=userMoneyPage";
                    $pageMoney = $_ENV['smarty']->getPages($url, 1, $moneyNumber, $pageSize, 1);
                    $_ENV['smarty']->assign('pageMoney', $pageMoney);
                } else {
                    $userMoneyData = 0;
                }
                $userRegistrationRecord = new UserRegistrationRecordModel();
                $userRegistrationRecord->initialize("user_id=" . $userId);
                $userRegistrationValue = $userRegistrationRecord->vars_all;
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
        $_ENV['smarty']->assign('userRegistrationValue', $userRegistrationValue);
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
                $upDatas['birthday'] = strtotime($_POST['birthday']);
                $upDatas['sex'] = $_POST['sex'];
                $this->updateUser($upDatas, $userId);
                $_GET["userId"] = $_POST['user_id'];
                $this->userEdit();
            } else {
                
            }
        } else {
            
        }
    }

//添加用户界面
    public function userManage() {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $returnFlag = false;
            if (empty($_POST['user_name'])) {
                $returnFlag = true;
            } else if (empty($_POST['user_phone']) || !ctype_digit($_POST['user_phone'])) {
                $returnFlag = true;
            } else if (empty($_POST['birthday'])) {
                $returnFlag = true;
            } else if ((empty($_POST['user_money']) || !ctype_digit($_POST['user_money'])) && $_POST['user_money'] != "0") {
                $returnFlag = true;
            } else if ((empty($_POST['user_integration']) || !ctype_digit($_POST['user_integration'])) && $_POST['user_integration'] != "0") {
                $returnFlag = true;
            } else {
                $insertUserData['user_name'] = $_POST['user_name'];
                $insertUserData['user_phone'] = $_POST['user_phone'];
                $insertUserData['birthday'] = strtotime($_POST['birthday']);
                $insertUserData['user_money'] = $_POST['user_money'];
                $insertUserData['user_integration'] = $_POST['user_integration'];
                $insertUserData['sex'] = $_POST['sex'];
                $returnVal = $this->addUser($insertUserData);
                if ($returnVal > 0) {
                    $this->userList();
                } else {
                    echo 'failed';
                }
            }
        } else {
            $_ENV['smarty']->setDirTemplates('user');
            $_ENV['smarty']->display('addUser');
        }
        //  $_ENV['smarty']->assign('userInfo', $result);
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
                        $moneyConturlRequest = $this->reductionMoney($userId, $moneyNumber);
                        break;
                    case "recharge":
                        $moneyConturlRequest = $this->addMoney($userId, $moneyNumber);
                        break;
                }

                echo "操作成功！";
                $this->moneyManage();
            } else {
                
            }
        }
    }

    public function pointConturl() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["pointNumber"] >= 0) {
                $userId = $_POST['userId'];
                $pointNumber = $_POST['pointNumber'];
                switch ($_POST["pointType"]) {
                    case "deductPoint":
                        $moneyConturlRequest = $this->reductionPointer($userId, $pointNumber);
                        break;
                    case "addPoint":
                        $moneyConturlRequest = $this->addPointer($userId, $pointNumber);
                        break;
                }

                echo "操作成功！";
                $this->pointManage();
            } else {
                
            }
        }
    }

    public function addUser($data) {

        if (is_array($data) && count($data) > 0) {

            $userModel = new userModel();
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

        if (!empty($user_id) && $user_id > 0) {

            $user = new userModel();

            $user->initialize('user_id = ' . $user_id);

            if ($user->vars_number > 0) {

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

        if (!empty($user_id) && $user_id > 0 && $integration > 0) {

            $user = new userModel();

            $user->initialize('user_id = ' . $user_id);

            if ($user->vars_number > 0) {

                $user->vars['user_integration']+=$integration;

                $user->updateVars();

                $user_pointer_record = new userPointerRecordModel();

                $user_pointer_record->addRecord($user_id, 1, (int) $integration, 'crm');
            }
        }
    }

    /**
     *  添加充值金额
     *  user_id  int   用户id  
     *  money    int   增加的充值金额
     */
    public function addMoney($user_id, $money) {

        if ($user_id > 0 && !empty($user_id) && $money > 0) {

            $user = new userModel();

            $user->initialize('user_id = ' . $user_id);

            if ($user->vars_number > 0) {

                $user->vars['user_money']+=$money;

                $user->updateVars();

                $user_pointer_record = new userPointerRecordModel();

                $user_pointer_record->addRecord($user_id, 2, (int) $money, 'crm');
            }
        }
    }

    /**
     * 减少用户积分
     * user_id  int  用户id  intergration  int 用户积分 
     */
    public function reductionPointer($user_id, $integration) {

        if (!empty($user_id) && $user_id > 0 && $integration > 0) {

            $user = new userModel();

            $user->initialize('user_id = ' . $user_id);

            if ($user->vars_number > 0) {

                $userPointer = $user->vars['user_integration'] - $integration;

                if ($userPointer < 0) {

                    $userPointer = 0;
                }

                $user->vars['user_integration'] = $userPointer;
                $user->updateVars();
                $user_pointer_record = new userPointerRecordModel();
                $misIntegration = -1 * $integration;
                $user_pointer_record->addRecord($user_id, 1, $misIntegration, 'crm');
            }
        }
    }

    /**
     * 减少用户金额
     * user_id  int  用户id  money  int 用户积分 
     */
    public function reductionMoney($user_id, $money) {

        if (!empty($user_id) && $user_id > 0 && $money > 0) {

            $user = new userModel();

            $user->initialize('user_id = ' . $user_id);

            if ($user->vars_number > 0) {

                $userMoney = $user->vars['user_money'] - $money;

                if ($userMoney < 0) {

                    $userMoney = 0;
                }

                $user->vars['user_money'] = $userMoney;

                $user->updateVars();
                $user_pointer_record = new userPointerRecordModel();
                $misMoney = $money * -1;
                $user_pointer_record->addRecord($user_id, 2, $misMoney, 'crm');
            }
        }
    }

//餘額ajax
    public function userMoneyPage() {
        if (isset($_REQUEST["userId"]) && isset($_GET["page"])) {
            $pageSize = 3;
            $pageNumber = $_GET["page"];
            $userId = $_REQUEST["userId"];
            $userPointerRecord = new userPointerRecordModel();
            $userPointerRecord->initialize("user_id='$userId' and record_type=2");
            $userPointerNumber = $userPointerRecord->vars_number;
            if ($userPointerNumber > 0) {
                $dateCount = $pageSize * ($pageNumber - 1);
                $userPointerRecord->addOffset($dateCount, $pageSize);
                $userPointerRecord->initialize();
                $userPointData = $userPointerRecord->vars_all;
                $url = WebSiteUrl . "/pageredirst.php?action=user&functionname=userMoneyPage";
                $page = $_ENV['smarty']->getPages($url, $pageNumber, $userPointerNumber, $pageSize, 1);
                foreach ($userPointData as $k => $v) {
                    switch ($v["source"]) {
                        case "crm":
                            $userPointData[$k]["source"] = "系统";
                            break;
                        case "guaguaka":
                            $userPointData[$k]["source"] = "刮刮卡";
                            break;
                        case "exchange":
                            $userPointData[$k]["source"] = "兑换";
                            break;
                        default :
                            $userPointData[$k]["source"] = $v["source"];
                            break;
                    }
                }
                $returnVal["returnData"] = $userPointData;
                $returnVal["page"] = $page;
                $returnVal["returnCode"] = '0';
            } else {
                $returnVal["returnCode"] = '1';
            }
        } else {
            $returnVal["returnCode"] = '2';
        }
        $returnVal["pageObject"] = "pageMoney";
        $returnVal["dataObject"] = "moneyMessage";
        $returnVal = json_encode($returnVal);
        header('Content-type: application/json');
        echo $returnVal;
    }

//积分ajax
    public function userPoniterPage() {
        if (isset($_REQUEST["userId"]) && isset($_GET["page"])) {
            $pageSize = 3;
            $pageNumber = $_GET["page"];
            $userId = $_REQUEST["userId"];
            $userPointerRecord = new userPointerRecordModel();
            $userPointerRecord->initialize("user_id='$userId' and record_type=1");
            $userPointerNumber = $userPointerRecord->vars_number;
            if ($userPointerNumber > 0) {
                $dateCount = $pageSize * ($pageNumber - 1);
                $userPointerRecord->addOffset($dateCount, $pageSize);
                $userPointerRecord->initialize();
                $userPointData = $userPointerRecord->vars_all;
                $url = WebSiteUrl . "/pageredirst.php?action=user&functionname=userPoniterPage";
                $page = $_ENV['smarty']->getPages($url, $pageNumber, $userPointerNumber, $pageSize, 1);
                foreach ($userPointData as $k => $v) {
                    switch ($v["source"]) {
                        case "crm":
                            $userPointData[$k]["source"] = "系统";
                            break;
                        case "guaguaka":
                            $userPointData[$k]["source"] = "刮刮卡";
                            break;
                        case "exchange":
                            $userPointData[$k]["source"] = "兑换";
                            break;
                        default :
                            $userPointData[$k]["source"] = $v["source"];
                            break;
                    }
                }
                $returnVal["returnData"] = $userPointData;
                $returnVal["page"] = $page;
                $returnVal["returnCode"] = "0";
            } else {
                $returnVal["returnCode"] = "1";
            }
        } else {
            $returnVal["returnCode"] = "2";
        }
        $returnVal["pageObject"] = "pointerPage";
        $returnVal["dataObject"] = "pointerMessage";
        $returnVal = json_encode($returnVal);
        header('Content-type: application/json');
        echo $returnVal;
    }

    //关联微信用户信息
    function gotoWeixinMessage() {
        if (!empty($_REQUEST["open_Id"])) {
            $openId = $_REQUEST["open_Id"];
            $weixinUser = new WeiXinUserModel();
            $weixinUser->initialize("openid = '" . $openId . "'");
            $weixinUserData[0] = $weixinUser->vars;
            $_ENV['smarty']->setDirTemplates('weixinuser');
            $_ENV['smarty']->assign('weixinUserData', $weixinUserData);
            $_ENV['smarty']->display('weixinuser');
        }
    }

}

?>