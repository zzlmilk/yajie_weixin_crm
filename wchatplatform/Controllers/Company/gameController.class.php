<?php


class gameController extends BaseController  {


    private $open_id;


    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

         if(!empty($_REQUEST['open_id'])){

            $this->userOpenId = $_REQUEST['open_id'];

        } else{

            $this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';

        }

         $this->assign('open_id',$this->userOpenId);
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */

    public function index(){

        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxe7878882ea37482b&secret=afc26fbaff69f7ce8c3c2a1cabdf0047&code='.$_REQUEST['code'].'&grant_type=authorization_code';
        
        $result = transferData($url, "get");
       
        $array = json_decode($result,true);
       
        $this->assign('open_id',$array['openid']);

        if(!empty($_REQUEST['action'])){

            $function = $_REQUEST['action'];

            $this->$function();
        }

    }
    
	public function bigWheelPage(){


		$this->display();

	}



    public function guaguaka() {

        $this->display();
    }

    /**
     * 
     */
    public function getBigWheel() {


        $token = $_REQUEST['token'];
        $ac = $_REQUEST['ac'];
        $tid = $_REQUEST['tid'];
        $t = $_REQUEST['t'];

        echo "123";
    }

   

    /**
     * 问卷 页面显示
     */
    public function Questionnaire() {

        $this->display();
    }


    /**
     * 活动页面
     */

    public function activity(){

        $this->display();

    }

    
}





?>