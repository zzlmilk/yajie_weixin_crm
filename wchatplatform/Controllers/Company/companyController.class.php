<?php

class CompanyController extends BaseController {

    private $appid = 'wx1273344d7b97cd07';

    private $sercet = '65f0ce66ed3b65ef8aebd7ae3ea92e5c';

    private $bigArray = array(
       

    );

    private $companyInfo = array('companyInfo'=>array('token'=>'company',''),'subscribe'=>array(''));

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
                            'type'=>'click',
                            'key'=>'register'
                        ),
                        array(
                            'name'=>urlencode("我要预约"),
                            'type'=>'click',
                            'key'=>'order'
                        ),
                        array(
                            'name'=>urlencode("我要兑换"),
                            'type'=>'click',
                            'key'=>'getExchangeList'
                        ),
                        array(
                            'name'=>urlencode("我要签到"),
                            'type'=>'click',
                            'key'=> 'qiandao'
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
                        ),

                        array(
                            'name'=>urlencode("大转盘"),
                            'type'=>'click',
                            'key'=>'dazhuanpan'
                        ),
                        array(
                            'name'=>urlencode("刮刮卡"),
                            'type'=>'click',
                            'key'=>'guaguaka'
                        ),
                      
                        array(
                            'name'=>urlencode("问卷"),
                            'type'=>'click',
                            'key'=>'wenjuan'
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

   


    $token = '7_Vrr1sIYpQcH1Mp4aDLy0ICzT2cDeo2TQz4eJa3dKdAkv4TEawT8uXk647vDAfzuDXkRlup_tGtA1alfdTjdq8YmYs0smELbzCZe3tHMH5rloCImTOTmc-e3Io0uSQZBekinHftuMy5sGgiVkpZtQ';


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