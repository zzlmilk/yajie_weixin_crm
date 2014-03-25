<?php


class gameController extends BaseController  {


    private $userOpenId;


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
     * 大转盘 ajax 方法
     */
    public function getBigWheel() {

        $token = $_REQUEST['token'];
        $ac = $_REQUEST['ac'];
        $tid = $_REQUEST['tid'];
        $t = $_REQUEST['t'];

        $resultPro = transferData(APIURL . '/gift/get_probability_wheel/?source=1234', 'get');
// $res = json_decode($resultPro,true);
        print_r($resultPro);
// echo "123";
    }

   

    /**
     * 问卷 页面显示
     */
    public function Questionnaire() {


        $all = $this->getQuesion();

        $this->assign('info',$all['question']);

        $this->assign('title',$all['title']);

        $this->display();
    }


    /**
     * 活动页面
     */

    public function activity(){

        $info = $this->getActivity();
        
        $this->assign('today_time',mktime(0,0,0));
        $this->assign('info',$info);
        $this->display();

    }


    public function getQuesion(){

        $quesionAll = transferData(APIURL . "/question/get_question", "get");

        $quesionResult = json_decode($quesionAll, true);

        return $quesionResult;
    }


    public function getActivity(){

        $ActivityJson = transferData(APIURL . "/activity/get_activity?source=company", "get");

        $ActivityArray = json_decode($ActivityJson, true);

        return $ActivityArray;
    }


    public function uploadQuestion(){


        $postDate["source"] = "company";

        $postDate['open_id'] = $this->userOpenId;

        $postDate['field'] = $_REQUEST['title'];

        $array =  explode(',', $_REQUEST['title']);

        foreach ($array as $key => $value) {
            # code...

            $postDate['quesion_'.$value] = $_REQUEST[$value];
        }

        print_r($postDate);


        $quesionResultJson = transferData(APIURL . "/question/add_question", "post",$postDate);

        $quesionResultArray = json_decode($quesionResultJson, true);


        print_r($quesionResultArray);

    }

    
}





?>