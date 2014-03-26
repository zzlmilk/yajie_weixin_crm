<?php


class gameController extends BaseController  {


    private $userOpenId;


    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

         if(!empty($_REQUEST['open_id'])){

            $this->userOpenId = $_REQUEST['open_id'];

        } 
        $this->assign('open_id',$this->userOpenId);
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */

    public function index(){

        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx1273344d7b97cd07&secret=65f0ce66ed3b65ef8aebd7ae3ea92e5c&code='.$_REQUEST['code'].'&grant_type=authorization_code';
        
        $result = transferData($url, "get");
       
        $array = json_decode($result,true);
       
        $this->assign('open_id',$array['openid']);

        if(!empty($_REQUEST['action'])){

            $function = $_REQUEST['action'];

            $this->display_page = $function;

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

        $resultPro = transferData(APIURL . '/gift/get_probability_wheel/?source=company1', 'get');
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
        $this->assign('info',$info['info']);
        $this->assign('record',$info['record']);
        $this->display('activity');

    }


    public function getQuesion(){

        $quesionAll = transferData(APIURL . "/question/get_question", "get");

        $quesionResult = json_decode($quesionAll, true);

        return $quesionResult;
    }


    public function getActivity(){

        $ActivityJson = transferData(APIURL . "/activity/get_activity?source=company1", "get");

        $ActivityArray = json_decode($ActivityJson, true);

        return $ActivityArray;
    }


    public function uploadQuestion(){

        $postDate["source"] = "company1";

        $postDate['open_id'] = $this->userOpenId;

        $postDate['field'] = $_REQUEST['title'];

        $array =  explode(',', $_REQUEST['title']);

        foreach ($array as $key => $value) {
                
            if(empty($_REQUEST[$value])){

                echo '第'.$value.'题必须填写';

                die;
            }

            $postDate['quesion_'.$value] = $_REQUEST[$value];
        }

        $quesionResultJson = transferData(APIURL . "/question/add_question", "post",$postDate);

        $quesionResultArray = json_decode($quesionResultJson, true);

        echo 'success';

    }


    public function applyAction(){

        $phone = $_REQUEST['user_phone'];

        if (preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/", $phone)) {

            $postDate["source"] = "company1";

            $postDate['user_phone'] = $phone;

            $postDate['real_name'] = $_REQUEST['real_name'];

            $postDate['activity_id'] = $_REQUEST['id'];

            $applyResultJson = transferData(APIURL . "/apply/addApply", "post",$postDate);

            $applyResultArray = json_decode($applyResultJson, true);

            $this->activity();

        }  else{

            echo '手机号码错误';
        }

    }

    public function code(){

       $code =  $this->getRandCode();
       
       echo $code['code_name'];

    }

      public function getRandCode(){

        $codeJson = transferData(APIURL . "/code/get_code?source=company1", "get");

        $codeArray = json_decode($codeJson, true);

        return $codeArray;
    }


    
}





?>