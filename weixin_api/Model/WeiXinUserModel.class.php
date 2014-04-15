<?php

class WeiXinUserModel extends Basic {

    public function __construct() {

        $this->child_name = 'weixin_user';

        parent::__construct();
    }

    public function getWeixinUserInfo($open_id, $user_id) {


        if (!empty($open_id)) {

            $weixinApi = new weixinApi();

            if ($_REQUEST['source'] == 'company') {

                $token_json = $weixinApi->getToken('wxe7878882ea37482b', 'afc26fbaff69f7ce8c3c2a1cabdf0047');
            } else {

                $token_json = $weixinApi->getToken('wx1273344d7b97cd07', '65f0ce66ed3b65ef8aebd7ae3ea92e5c');
            }

            $token_array = json_decode($token_json, true);

            $weixinUser = new WeiXinUserModel();

            if (is_array($token_array)) {

                $token = $token_array['access_token'];

                /**
                 * 获取用户信息
                 */
                $user_json = $weixinApi->getUserInfo($open_id, $token);

                $user_array = json_decode($user_json, true);

                if (count($user_array) > 0 && $user_array['subscribe'] == 1) {


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

                    $data['subscribe'] = $user_array['subscribe'];
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