<?php
class homeController extends BaseController {

    private $companyInfo = array('companyInfo'=>array('token'=>'jiantang',''),'subscribe'=>array('type'=>'text','text'=>'欢迎进入脊安堂大本营！脊安堂专业美式整脊，助你健康一臂之力！
客服微信：133-9112-9112'));

    private $bigArray;

     public function __construct() {

        header("Content-type:text/html;charset=utf-8");
    }


    public function index() {

        $weChat = new Wechat();

        $weChat->sendmessage($this->bigArray,$this->companyInfo);
       
    }


    
    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function testpage() {


    
    	$this->setDir('Home');

        $this->display('test');
    }    

}

?>