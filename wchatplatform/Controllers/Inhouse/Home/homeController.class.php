<?php
class homeController extends BaseController {

    private $companyInfo = array('companyInfo'=>array('token'=>'house',''),'subscribe'=>array(''));

    private $bigArray;

     public function __construct() {

        header("Content-type:text/html;charset=utf-8");
    }


    public function index() {


        echo $_GET['echostr'];

            $fp=fopen("log.txt","w+");  
    $strText='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."\r\n";  
    fwrite($fp,$strText);  

        die;
      

        $weChat = new Wechat();

        $weChat->sendmessage($this->bigArray,$this->companyInfo);
       
    }


    public function test(){

        $arr = array( 
            'button' =>array(
                array(
                    'name'=>urlencode("会员尊享"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("成为会员"),
                            'type'=>'click',
                            'key'=>'register'
                        ),
                        array(
                            'name'=>urlencode("消费记录"),
                            'type'=>'click',
                            'key'=>'order'
                        ),
                        array(
                            'name'=>urlencode("我要兑换"),
                            'type'=>'click',
                            'key'=>'getExchangeList'
                        ),
                        array(
                            'name'=>urlencode("我的中心"),
                            'type'=>'click',
                            'key'=>'wodezhongxin'
                        )
                    )
                ),
                array(
                    'name'=>urlencode("精彩活动"),
                    'sub_button'=>array(
                       
                         array(
                            'name'=>urlencode("近期活动"),
                            'type'=>'click',
                            'key'=>'jinqihuodong'
                        )

                       
                    )
                ),
                array(
                    'name'=>urlencode("服务中心"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("商户联系方式"),
                            'type'=>'click',
                            'key'=>'lianxifangshi'
                        )
                    )
                )
            )
        );



        $jsondata = urldecode(json_encode($arr));

   


    $token = 'cf8ZCJLkK6Ylqx0YLq5QJa6jrvY4JUF0jqySABGV5pspwJYZrLmQmetyubKUDUcd8PGMSFe_hfFXnA1Y7c14eXhSFzKBOXMSYcbjDVqkMYLnkir6emRGEXvnzIUW9a7adkO8tw0pH3dukbKEv0TxNQ';


    $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$token;

     $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$jsondata);
      $result =   curl_exec($ch);
        curl_close($ch);



        echo $result;

    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function testpage() {


    
    	$this->setDir('Home');

        $this->display('index');
    }    

}

?>