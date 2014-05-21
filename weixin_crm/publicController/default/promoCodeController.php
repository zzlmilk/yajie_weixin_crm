<?php

class promoCodeController implements promoCode {


     public $pageSize = 3;


    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('promoCode');
    }

    public function promoCodeCheck() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["promoCode"])) {
                $promoCode = new promoCodeModel();
                $promoCode->initialize("code_name='" . $_POST["promoCode"] . "'");
                if ($promoCode->vars_number == 1) {
                    $promoCodeValue = $promoCode->vars;
                    if ($promoCodeValue["code_state"] != 0) {
                        $responseMessage = "已验证或者过期的验证码！";
                    } else {
                        $responseMessage = "验证成功！";
                        $postData["code_state"] = 2;
                        $this->promoCodeUpdate($postData, $promoCodeValue["promo_code_id"]);
                    }
                } else {
                    $responseMessage = "验证码错误，请重试";
                }
            } else {
                $responseMessage = "未获取验证码，请重试";
            }
            $_ENV['smarty']->assign('responseMessage', $responseMessage);
            $_ENV['smarty']->display('promoCodeCheck');
        } else {
            $_ENV['smarty']->display('promoCodeCheck');
        }
    }

    public function promoCodeUpdate($data, $codeId) {
        if (is_array($data) && count($data) > 0) {

            $promoCode = new promoCodeModel();

            $promoCode->initialize('promo_code_id = ' . $codeId);

            if ($promoCode->vars_number > 0) {

                $promoCode->update($data);
            }
        }
    }


    /**
     * 生成验证码
     */

    public function addCode(){

        $_ENV['smarty']->display('addCode');

    }


    /**
     * 生成验证码 程序
     */

    public function promoCodePut(){

        if(!empty($_REQUEST['codeNumber'])){

            $number = $_REQUEST['codeNumber'];

        } else{

            $number = 1;
        }

        $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        $promotion_codes = array();//这个数组用来接收生成的优惠码 


        $codeModel = new PromoCodeModel();

        for($j = 0 ; $j < $number; $j++) 
        { 
            $code = "WX"; 

            for ($i = 0; $i < 4; $i++) 
            { 
                 
                $code .= $characters[mt_rand(0, strlen($characters)-1)].rand(10,99); 
            } 

            $insert['code_name'] = $code;

            $insert['code_merchandise'] = 1;

            array_push($promotion_codes,$code);

            $codeModel->insert($insert);
        }

        if(count($promotion_codes)  > 0){

            $message = '生成成功';
        }


        $_ENV['smarty']->assign('message',$message);

        $_ENV['smarty']->assign('info',$promotion_codes);

        $_ENV['smarty']->display('codeSuccess');

    }


    public function codeList(){


        $pageSize = $this->pageSize;
        $code = new PromoCodeModel();

        if(!empty($_REQUEST['selectText'])){

            $where = 'code_name like "'.$_REQUEST['selectText'].'"';

        } else{

            $where = 1;

        }

        $code->initialize($where);
        $userNumber = $code->vars_number;
        $code->addOffset(0, $pageSize);
        $code->initialize();
        $result = $code->vars_all;
       
        $_ENV['smarty']->assign('info', $result);

        $url = WebSiteUrl . "/pageredirst.php?action=promoCode&functionname=codeListPage";
        $page = $_ENV['smarty']->getPages($url, 1, $userNumber, $pageSize);
        $_ENV['smarty']->assign('pages', $page);
        
        $_ENV['smarty']->display('codeList');
    }


    public function codeListPage() {
        if (isset($_GET["page"])) {
            $pageSize = $this->pageSize;
            $pageNumber = $_GET["page"];
            $code = new PromoCodeModel();
            $code->initialize();
            $userNumber = $code->vars_number;
            $dateCount = $pageSize * ($pageNumber - 1);
            $code->addOffset($dateCount, $pageSize);
            $code->initialize();
            $result = $code->vars_all;
            $_ENV['smarty']->assign('info', $result);
            $url = WebSiteUrl . "/pageredirst.php?action=promoCode&functionname=codeListPage";
            $page = $_ENV['smarty']->getPages($url, $pageNumber, $userNumber, $pageSize);
            $_ENV['smarty']->assign('pages', $page);

            $_ENV['smarty']->display('codeList');
        } else {
            $this->codeList();
        }
    }

    public function seachCode(){


    }

}

?>
