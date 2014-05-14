<?php

class WeiXinUserModel extends Basic {

    public function __construct() {

        $this->child_name = 'weixin_user';

       

        parent::__construct();
    }

    public function getWeixinUserInfo($open_id, $user_id) {


        if (!empty($open_id)) {

            $weixinApi = new weixinApi();
            
            $company = new companyModel();

            $this->newDB = 'weixin';
            
            $token = $company->get_info($_REQUEST['source']);

            $token_json = $weixinApi->getToken($token['appid'],$token['app_secret']);

            $token_array = json_decode($token_json, true);

            $weixinUser = new WeiXinUserModel();

             $this->newDB = '';

            if (is_array($token_array)) {

                $token = $token_array['access_token'];

                if(!empty($token)){

                         /**
                 * 获取用户信息
                 */
                $user_json = $weixinApi->getUserInfo($open_id, $token);

                $user_array = json_decode($user_json, true);



                if (count($user_array) > 0 && $user_array['subscribe'] == 1 && !empty($user_array['subscribe'])) {


                    $data['subscribe'] = $user_array['subscribe'];

                    $data['openid'] = $user_array['openid'];

                    $data['sex'] = $user_array['sex'];

                    $data['nickname'] = $user_array['nickname'];

                    $data['language'] = $user_array['language'];

                    $data['city'] = $user_array['city'];

                    $data['province'] = $user_array['province'];

                    $data['country'] = $user_array['country'];

                    $data['headimgurl'] = $user_array['headimgurl'];

                    $data['subscribe_time'] = $user_array['subscribe_time'];

                    $weixinUser->insert($data);
                } else {

                    $data['subscribe'] = 0;
                }
                }  else{
$data['subscribe'] = 0;
                    
                }

               

                return $data;
            }
        }
    }

    public function getWeiXinInfo($open_id, $user_id) {


        $weixinModel = new WeiXinUserModel();

        $weixinModel->initialize('openid like "' . $open_id . '"');

        if ($weixinModel->vars_number > 0) {

            return $weixinModel->vars;
        } else {

            $array = $this->getWeixinUserInfo($open_id, $user_id);

            if (count($array) > 0) {

                return $array;
            }
        }
    }

}

?>