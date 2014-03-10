<?php

class CompanyController extends BaseController {

    private $appid = 'wxe7878882ea37482b';

    private $sercet = 'afc26fbaff69f7ce8c3c2a1cabdf0047';

    private $bigArray = array(

        'test'=>array('name'=>'test',type=>'php'),
    );


    private $companyInfo = array('companyInfo'=>array('token'=>'company',''),'subscribe'=>'欢迎关注雅捷');

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");
    }

    public function index() {



        transferData(APIURL.'/user/add','post',$data);

        $weChat = new Wechat();

        $weChat->sendmessage($this->bigArray,$this->companyInfo);
       
    }


    public function test(){


        $arr = array( 
            'button' =>array(
                array(
                    'name'=>urlencode("我"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("登录"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=login'
                        ),
                        array(
                            'name'=>urlencode("注销"),
                            'type'=>'click',
                            'key'=>'user_logout'
                        ),
                        array(
                            'name'=>urlencode("二维码名片"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=codeCard'
                        ),
                        array(
                            'name'=>urlencode("我要申请"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=apply'
                        )
                    )
                ),
                array(
                    'name'=>urlencode("服务维护"),
                    'sub_button'=>array(
                       
                        array(
                            'name'=>urlencode("客户关系"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=kehu'
                        ),
                        array(
                            'name'=>urlencode("我有代办"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=daiban'
                        ),
                        array(
                            'name'=>urlencode("我有提醒"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=tixing'
                        ),
                        array(
                            'name'=>urlencode("重要通知"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=importantNotice'
                        )
                    )
                ),
                array(
                    'name'=>urlencode("雅捷精彩"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("提醒设置"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=alertSettings'
                        ),
                        array(
                            'name'=>urlencode("地图导航"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=mapNavigation'
                        ),
                        array(
                            'name'=>urlencode("经理签到"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=managerRegistration'
                        ),
                        array(
                            'name'=>urlencode("营销工具"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=marketingTools'
                        ),
                        array(
                            'name'=>urlencode("关于"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=about'
                        )
                    )
                )
            )
        );



        $jsondata = urldecode(json_encode($arr));

   


    $token = 'WcCMOuygUrovG__sdcfXMPsk37L8jQY76Fjtgw2zW7OG3uGG-yU_Vd8aex8m0p8-rqaplOKjFMeiuyp4ZVs_FND_XFrtAdBhChgYm1T1LPf8_vUYY26tBBea_f-41DZeJJ-SWeRwB5YTubhL0PgzvA';


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

}

?>