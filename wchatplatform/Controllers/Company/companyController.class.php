<?php

class CompanyController extends BaseController {

    private $appid = 'wxe7878882ea37482b';

    private $sercet = 'afc26fbaff69f7ce8c3c2a1cabdf0047';

    private $bigArray = array(
        'page'=>array('name'=>'1234','type'=>'text','text'=>'<a href="http://112.124.25.155/wchatplatform/?g=company&a=test&v=index&open_id={$open_id}">请点击这里</a>'),
        'test'=>array('name'=>'test','type'=>'php','text'=>'<a href="">请点击这里</a>>'),

        '1'=>array('type'=>'image','text'=>'[{"Title":"\u6211\u7684\u8d26\u6237","Description":"","Url":"","PicUrl":"http:\/\/112.124.25.155\/wchatplatform\/public\/company\/image\/2011071223051083.jpg"}]'),

    );


    private $companyInfo = array('companyInfo'=>array('token'=>'company',''),'subscribe'=>array('type'=>'news','text'=>'[{"Title":"\u6c5f\u897f\u519c\u4fe1\u793e\u5ba2\u6237\u7ba1\u7406","Description":"","Url":"","PicUrl":"http:\/\/112.124.25.155\/wchatplatform\/public\/company\/image\/2011071223051083.jpg"}]'));

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");
    }

    public function aaaa(){


        $array['Title'] = '江西农信社客户管理';

        $array['Description'] = '';

        $array['Url'] = '';

        $array['PicUrl'] = 'http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg';


        echo json_encode($array);

    }

    public function index() {


       
        // $result = transferData(APIURL.'/user/add','post',$data);


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
                            'name'=>urlencode("我有提醒"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=tixing'
                        ),

                        array(
                            'name'=>urlencode("客户关系"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=kehu'
                        ),
                        array(
                            'name'=>urlencode("客户评价"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=kehupingjia'
                        ),
                      
                        array(
                            'name'=>urlencode("客户产品策略"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=chanpingcelue'
                        ),
                      
                        array(
                            'name'=>urlencode("客户服务策略"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=fuwucelue'
                        )
                    )
                ),
                array(
                    'name'=>urlencode("雅捷精彩"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("重要通知"),
                            'type'=>'view',
                            'url'=>'http://112.124.25.155/wchatplatform?a=company&v=importantNotice'
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