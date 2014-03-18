<?php

class TestController extends BaseController {



     public function __construct() {

        header("Content-type:text/html;charset=utf-8");


        $this->assign('open_id',$_REQUEST['open_id']);
    }


    /**
     * 下订单 和修改订单
     */

    public function order() {
        if(isset($_GET[checkReturn])){
            
            $this->assign("checkReturn",$_GET[checkReturn]);
            $this->assign("returnVal",$_POST);
        }
        
        $this->display();
    }


    /**
     *  查看订单
     */

    public function orderCheck() {
        foreach ($_POST as $key => $val) {
            if ($key == "orderDateInput") {
                $valCache = explode(" ", $val);
                $val = $valCache[0];
                $returnVal["weekNum"] = $valCache[1];
            }
            if ($key == "orderMerchandise") {
                $valCache = explode("      ", $val);
                $val = $valCache[0];
                $returnVal["needMoney"] = $valCache[1];
            }
            $returnVal["$key"] = $val;
        }

        $this->assign("returnVal", $returnVal);
        $this->display();
    }


    /**
     * 注册现实
     */
    public function register() {

        $this->assign('open_id', $_REQUEST['open_id']);

        $this->display();
    }

    public function index() {

        //$this->assign('open_id',$_REQUEST['open_id']);

        $this->display();
    }

    /**
     * 提交注册
     */

    public function submitRegister() {

        $data = array();
        //$data['open_id'] = 'ocpOotwOr44N8_zpyG7LttDgZscw';
        $data['open_id'] = $_POST['open_id'];
        $data['source'] = 'company';
        $data['user_name'] = $_POST['userName'];
        $data['sex'] = $_POST['gender'];
        $data['user_phone'] = $_POST['phoneNumber'];
        // $data['password'] = $_POST['password'];
        $data['birthday'] = strtotime($_POST['year'] . $_POST['month'] . $_POST['date']);

        //print_r($data);
        //transferData(APIURL.'/user/add','post',$data);

        $resultRename = transferData(APIURL . '/user/able_user/', 'post', $data);
        $res = json_decode($resultRename, true);

        if ($res['success'] == 1) {
            $resultRegister = transferData(APIURL . '/user/add', 'post', $data);
            $resultRegister = json_decode($resultRegister, true);

            if ($resultRegister['user']['user_id'] > 0) {

                // 注册成功后跳转会员中心
            }
        } else {

            echo "error";
        }
    }

	public function bigWheelPage(){


		$this->display();

	}

	


	public function  guaguaka(){

		$this->display();

	}

	public function getBigWheel(){


		$token = $_REQUEST['token'];
		$ac = $_REQUEST['ac'];
		$tid = $_REQUEST['tid'];
		$t = $_REQUEST['t'];

		echo "123";
	}

	public function ativating(){

		
		$this->display();
	}



}

?>