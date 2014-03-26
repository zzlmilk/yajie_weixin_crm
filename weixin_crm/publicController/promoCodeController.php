<?php

class promoCodeController implements promoCode {

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

}

?>
