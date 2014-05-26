<?php

class UserController extends BaseController {

    public $postData;
    public $errorMessage = "";

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            $this->userOpenId = 'oIUY-tzD2rRdkycAc5ceQjtI1-ok';


            //$this->userOpenId = 'dasdasd';
        }


        $this->assign('open_id', $this->userOpenId);
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function index() {


        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx1273344d7b97cd07&secret=65f0ce66ed3b65ef8aebd7ae3ea92e5c&code=' . $_REQUEST['code'] . '&grant_type=authorization_code';

        $result = transferData($url, "get");

        $array = json_decode($result, true);

        $this->assign('open_id', $array['openid']);

        $this->userOpenId = $array['openid'];

        if (!empty($_REQUEST['action'])) {

            $function = $_REQUEST['action'];

            $this->display_page = $function;

            $this->$function();
        }
    }

    public function register() {

        $userApi = new userApi();

        $userInfo = $userApi->ableUser($this->userOpenId);

        $error = new errorApi();

        $error->JudgeError($userInfo);



        $this->assign('open_id', $this->userOpenId);

        $this->ableSource($_REQUEST);

        $this->assign('vars', json_encode($_REQUEST));

        $this->setDir('User');

        $this->display('register');
    }

    /**
     * 提交注册
     */
    public function submitRegister() {



        if (!empty($_REQUEST['open_id'])) {
            if (!empty($_REQUEST['phoneNumber'])) {
                if (checkMobile($_REQUEST['phoneNumber'])) {
                    if (!empty($_REQUEST['userName'])) {
                        $data = array();
                        $data['open_id'] = $_REQUEST['open_id'];
                        $data['source'] = SOURCE;
                        $data['user_name'] = $_REQUEST['userName'];
                        $data['sex'] = $_REQUEST['gender'];
                        $data['user_phone'] = $_REQUEST['phoneNumber'];
                        $data['birthday'] = strtotime($_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['date']);
                        $resultRenameJson = transferData(APIURL . '/user/able_user/', 'post', $data);
                        $resultRenameArray = json_decode($resultRenameJson, true);

                        $error = new errorApi();

                        $error->JudgeError($resultRenameArray);

                        if ($resultRenameArray['success'] == 1) {


                            $resultRegisterJson = transferData(APIURL . '/user/add', 'post', $data);

                            $resultRegisterArray = json_decode($resultRegisterJson, true);

                            $error = new errorApi();

                            $error->JudgeError($resultRegisterArray);



                            if ($resultRegisterArray['user']['user_id'] > 0) {

                                if (!empty($_REQUEST['vars'])) {


                                    $varsArray = json_decode(stripcslashes($_REQUEST['vars']), true);

                                    if (!empty($varsArray['action'])) {
                                        if ($varsArray['action'] == '/code/getCode') {

                                            $array = array('open_id' => $varsArray['open_id'], 'give_open_id' => $varsArray['give_open_id']);

                                            R($varsArray['action'], $varsArray['source'], $array);
                                        } else if ($varsArray['action'] == 'url') {

                                            $this->jsJump($varsArray['url']);
                                        }

                                        die;
                                        //U($_REQUEST['path'], $_REQUEST['vars']);
                                    }
                                }



                                U(MODULE_DIR_NAME . '/user/userCenter', array('open_id' => $_REQUEST['open_id']));
                            }
                        } else {

                            $this->displayMessage('用户已经注册!');
                        }
                    } else {

                        $this->displayMessage('用户名不能为空!');
                    }
                } else {

                    $this->displayMessage('手机格式不正确!');
                }
            } else {

                $this->displayMessage('手机号码必须存在!');

                die;
            }
        } else {

            $this->displayMessage('open_id 不存在  请重新从微信公众平台中进入!');

            die;
        }
    }

    /**
     * 用户积分
     */
    public function userCenter() {

        $this->able_register();

        $userApi = new userApi();

        $userInfo = $userApi->getUserInfo($this->userOpenId);
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $this->userOpenId;
        $messagePrompt = transferData(APIURL . "/user/get_info_status", "post", $postDate);
        $messagePrompt = json_decode($messagePrompt, TRUE);
        $messagePrompt["code_number"] = 1;
        $messagePrompt["order_number"] = 2;
        $messagePrompt["exchange_number"] = 3;
        $this->assign('messagePrompt', $messagePrompt);
        if (!empty($userInfo)) {

            $this->assign('userinfo', $userInfo);
        }
        $this->display();
    }

    public function userInfo() {

        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $this->userOpenId;
        $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
        $userInfo = json_decode($userInfo, TRUE);
        $error = new errorApi();
        $error->JudgeError($userInfo);
        $this->assign('userinfo', $userInfo["weixin_user"]);
        $birthdayToDate = $userInfo["user"]["birthday"];
        $birthdayToDate = date("Y-m-d", $birthdayToDate);
        $this->assign("userBirthday", $birthdayToDate);
        $this->display();
    }

    /**
     * 用户积分
     */
    public function userJf() {



        if (!empty($_REQUEST['type'])) {


            $type = $_REQUEST['type'];
        } else {

            $type = 1;
        }

        $userApi = new userApi();

        $result = $userApi->getUserRecord($this->userOpenId, $type);


        $this->assign('type', $type);
        $this->assign('data', $result);

        $this->assign('number', count($result));

        $this->display();
    }

    /**
     * 用户签到
     */
    public function userlogin() {

        $this->able_register();


        $this->display();
    }

    /**
     *  激活页面
     */
    public function ativating() {

        $this->able_register();

        $this->display();
    }

    /**
     * 签到
     */
    public function registration() {

        $this->able_register();

        $array = $this->userRegistration();

        $today_time = mktime(0, 0, 0);

        if (!empty($array['error'])) {

            $error_code = $array['error']['error_status'];

            $array['res'] = 0;

            $array['day'] = 0;
        } else {

            if ($today_time == $array['registration_time']) {

                $array['res'] = 1;
            } else {


                $array['res'] = 0;
            }
        }
        $this->assign('info', $array);

        $this->display('registration');
    }

    /**
     * 获取用户签到信息 api
     */
    public function userRegistration() {
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $this->userOpenId;


        $userRegistration = transferData(APIURL . "/registration/get_registeration", "post", $postDate);

        $userRegistration_ = json_decode($userRegistration, true);


        return $userRegistration_;
    }

    /**
     * 用户签到接口
     */
    public function registrationAction() {

        $postDate["source"] = SOURCE;

        $postDate['open_id'] = $this->userOpenId;


        $userRegistrationA = transferData(APIURL . "/registration/userRegisterationIntegration", "post", $postDate);

        $userRegistration_info = json_decode($userRegistrationA, true);

        $this->registration();
    }

}

?>