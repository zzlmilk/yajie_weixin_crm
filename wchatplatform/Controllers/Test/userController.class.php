<?php

class UserController extends BaseController {

    public $userOpenId;
    public $postData;
    public $errorMessage = "";

    public function __construct() {
        

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            //$this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';         
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

        $this->display();
    }

    /**
     * 提交注册
     */
    public function submitRegister() {
        if (!empty($_REQUEST['open_id'])) {
            if (!empty($_REQUEST['phoneNumber'])) {
                if (preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/", $_REQUEST['phoneNumber'])) {
                    if (!empty($_REQUEST['userName'])) {
                        $data = array();
                        $data['open_id'] = $_REQUEST['open_id'];
                        $data['source'] = 'company1';
                        $data['user_name'] = $_REQUEST['userName'];
                        $data['sex'] = $_REQUEST['gender'];
                        $data['user_phone'] = $_REQUEST['phoneNumber'];
                        $data['birthday'] = strtotime($_POST['year'] . $_POST['month'] . $_POST['date']);
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
                                
                                 R('/user/userCenter','company', array('open_id' => $_REQUEST['open_id']));

                                 die;

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
    public function userCenter($open_id = '') {

        if(!empty($open_id)){

            $user_open_id = $open_id;

        } else{


            $user_open_id = $this->userOpenId;
        }

        $userApi = new userApi();

        $userInfo = $userApi->getUserInfo($user_open_id, 'company');

         $error = new errorApi();

        $error->JudgeError($userInfo);
        
        if (!empty($userInfo)) {
       
    
            $this->assign('userinfo', $userInfo);
        }
        $this->display();
    }

    public function userInfo() {

        $this->display();
    }

    /**
     * 用户积分
     */
    public function userJf() {

        $this->display();
    }

    /**
     * 用户签到
     */
    public function userlogin() {


        $this->display();
        
    }

    /**
     *  激活页面
     */
    public function ativating() {


        $this->display();
    }

   

    /**
     * 签到
     */
    public function registration() {

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
        $postDate["source"] = "company";
        $postDate['open_id'] = $this->userOpenId;


        $userRegistration = transferData(APIURL . "/registration/get_registeration", "post", $postDate);

        $userRegistration_ = json_decode($userRegistration, true);


        return $userRegistration_;
    }

    /**
     * 用户签到接口
     */
    public function registrationAction() {

        $postDate["source"] = "company";

        $postDate['open_id'] = $this->userOpenId;


        $userRegistrationA = transferData(APIURL . "/registration/user_registeration", "post", $postDate);

        $userRegistration_info = json_decode($userRegistrationA, true);

        $this->registration();
    }




}

?>