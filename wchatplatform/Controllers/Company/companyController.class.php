<?php

class CompanyController extends BaseController {

    private $appid = 'wxe7878882ea37482b';

    private $sercet = 'afc26fbaff69f7ce8c3c2a1cabdf0047';

    private $bigArray = array(
        'page'=>array('name'=>'1234','type'=>'text','text'=>'<a href="http://112.124.25.155/wchatplatform/?g=company&a=test&v=index&open_id={$open_id}">请点击这里</a>'),
        'test'=>array('name'=>'test','type'=>'php','text'=>'<a href="">请点击这里</a>>'),

       

    );

    private $companyInfo = array('companyInfo'=>array('token'=>'company',''),'subscribe'=>array('type'=>'news','text'=>'[{"Title":"\u6c5f\u897f\u519c\u4fe1\u793e\u5ba2\u6237\u7ba1\u7406","Description":"","Url":"","PicUrl":"http:\/\/112.124.25.155\/wchatplatform\/public\/company\/image\/2011071223051083.jpg"}]'));

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");
    }


    public function index() {

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
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Duser%26v%3Dindex%26action%3Dregister&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode("我要预约"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Duser%26v%3Dindex%26action%3Dorder&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode("我要兑换"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Duser%26v%3Dindex%26action%3DgetExchangeList&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode("我要签到"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Duser%26v%3Dindex%26action%3Duserlogin&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode("我的中心"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Duser%26v%3Dindex%26action%3DuserCenter&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        )
                    )
                ),
                array(
                    'name'=>urlencode("精彩活动"),
                    'sub_button'=>array(
                       
                         array(
                            'name'=>urlencode("近期活动"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Dgame%26v%3Dactivity&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),

                        array(
                            'name'=>urlencode("大转盘"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Dgame%26v%3DbigWheelPage&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode("刮刮卡"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Dcompany%26v%3Dguaguaka&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                      
                        array(
                            'name'=>urlencode("问卷"),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri=http%3A%2F%2F112.124.25.155%2Fwchatplatform%3Fg%3Dcompany%26a%3Dcompany%26v%3DQuestionnaire&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        )
                    )
                ),
                array(
                    'name'=>urlencode("服务中心"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("商户联系方式"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?g=company&a=company&v='
                        )
                    )
                )
            )
        );



        $jsondata = urldecode(json_encode($arr));

   


    $token = 'xTrd7JUY-MCeDfSfZrxRWjAJFdm-j08v_RAmmKzz0qas-sQsRa-zXxkqI6bGpe2sh-IiU6Uw1XKPIciOYyIuka8Kd_OYzgdF1Ji71BdvLR7ROZUpsN0dZrlp4GxUTZGq2SG-bUvAJKbXQ1Tbsgfixg';


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


    public function login(){

        $this->display();

    }

    public function home(){

        $this->display();

    }

    public function  more(){

        $this->display();

    }


    public function kehu(){


        $this->display();

    }

    public function userInfo(){

        $this->display();

    }

    public function tezheng(){

        $this->display();
    }

    public function tixing(){

        $this->display();

    }

    public function tixingDetail(){

        $this->display();
    }

    public function daiban(){

        $this->display();

    }


    public function  codeCard(){


        $this->display();

    }

    public function apply(){

        $this->display();

    }

    public function alertSettings(){

        $this->display();

    }

    public function mapNavigation(){


        $this->display();

    }

    public function managerRegistration(){


        $this->display();

    }

    public function  marketingTools(){


        $this->display();

    }

    public function about(){

        $this->display();

    }


    public function importantNotice(){

        $this->display();

    }


    public  function kehupingjia(){


        $this->display();

    }

     public  function chanpingcelue(){


        $this->display();

    }



    public function fuwucelue(){

        $this->display();

    }

}

?>