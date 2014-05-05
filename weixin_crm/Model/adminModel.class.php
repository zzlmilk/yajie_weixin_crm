<?php

class adminModel extends Basic {

    public function __construct($id = null) {

        $this->child_name = 'admin';
        
        $this->dbname = 'weixin';
        
        parent::__construct();
        
        if ($id) {
            $obj[$this->child_name . '_id'] = $id;
            $this->initialize($obj);
        }

        
    }

    public function getAdminInfo($username, $password) {

        $admin = new adminModel();

        $admin->initialize('account like "' . $username . '" and account_password like "' . $password . '"');


        if ($admin->vars_number > 0) {

            return 1;
        } else {

            return 0;
        }
    }

    function admin_path($path) {
        $path_1 = json_decode($path);
        foreach ((array) $path_1 as $kk => $vv) {
            $maincontnet['auth_show'][$vv] = '<font class="green">&radic;</font>';
        }
        return $maincontnet;
    }

    function admin_auth($path) {
        $path_1 = explode(',',$path);
        foreach ((array) $path_1 as $kk => $vv) {
            $maincontnet[$vv] = 1;
        }
        return $maincontnet;
    }

}

?>