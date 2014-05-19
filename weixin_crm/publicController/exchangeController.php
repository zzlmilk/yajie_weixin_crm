<?php

class exchangeController implements exchange {

    public $errorMessage = '';

    public function ExchangeList() {
        $pageSize = 3;
        $exchangeModel = new exchangeModel();
        $exchangeModel->initialize();
        $exchangeNumber = $exchangeModel->vars_number;
        $exchangeModel->addOffset(0, $pageSize);
        $exchangeModel->initialize();
        $exchangeList = $exchangeModel->vars_all;
        $_ENV['smarty']->setDirTemplates('exchange');
        $_ENV['smarty']->assign('exchangeList', $exchangeList);
        $url = WebSiteUrl . "/pageredirst.php?action=exchange&functionname=ExchangeListPage";
        $page = $_ENV['smarty']->getPages($url, 1, $exchangeNumber, $pageSize);
        $_ENV['smarty']->assign('pages', $page);
        $_ENV['smarty']->display('ExchangeList');
    }

    public function ExchangeListPage() {
        if (isset($_GET["page"])) {
            $pageSize = 3;
            $pageNumber = $_GET["page"];
            $exchangeModel = new exchangeModel();
            $exchangeModel->initialize();
            $exchangeNumber = $exchangeModel->vars_number;
            $dateCount = $pageSize * ($pageNumber - 1);
            $exchangeModel->addOffset($dateCount, $pageSize);
            $exchangeModel->initialize();
            $exchangeList = $exchangeModel->vars_all;
            $_ENV['smarty']->setDirTemplates('exchange');
            $_ENV['smarty']->assign('exchangeList', $exchangeList);
            $url = WebSiteUrl . "/pageredirst.php?action=exchange&functionname=ExchangeListPage";
            $page = $_ENV['smarty']->getPages($url, $pageNumber, $exchangeNumber, $pageSize);
            $_ENV['smarty']->assign('pages', $page);

            $_ENV['smarty']->display('ExchangeList');
        } else {
            $this->ExchangeList();
        }
    }

    public function addExchangeItem() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

//            $imageReturnVal = $this->addImage("exampleInputFile");
//            if ($imageReturnVal["state"] == 0) {
                $insertData['exchange_name'] = $_POST['exchange_name'];
                $insertData['exchange_type'] = $_POST['exchange_type'];
                $insertData['exchange_integration'] = $_POST['exchange_integration'];
                $insertData['exchange_summary'] = $_POST['exchange_summary'];
                $insertData['exchangez_details'] = $_POST['exchangez_details'];
                $insertData['exchange_image'] = $_POST['exchange_image'];
                $insertData['create_time'] = time();
                $this->addExchange($insertData);
                $this->ExchangeList();
//            } else {
//
//                $_SERVER["REQUEST_METHOD"] = "GET";
//                $this->errorMessage = $imageReturnVal['message'];
//                $this->addExchangeItem();
//            }
        } else {
            $_ENV['smarty']->setDirTemplates('exchange');
            $_ENV['smarty']->assign('errorMessage', $this->errorMessage);
// $_ENV['smarty']->assign('exchangeList', $exchangeList);
            $_ENV['smarty']->display('addExchangeItem');
        }
    }

    public function exchangeItemDelete() {
        if (isset($_GET['ItemId'])) {
            $this->deleteExchange($_GET['ItemId']);
            $this->ExchangeList();
        }
    }

    public function editExchangeItem() {
        if (isset($_GET['ItemId'])) {
            $itemId = $_GET['ItemId'];
            $exchangeModel = new exchangeModel();
            $exchangeModel->initialize("exchange_id = '$itemId'");
            $exchageValue = $exchangeModel->vars;
            $_ENV['smarty']->setDirTemplates('exchange');
            $_ENV['smarty']->assign('exchageValue', $exchageValue);
            $_ENV['smarty']->display('exchangeEdit');
        }
    }

    public function exchangeUpdate() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_GET["ItemId"])) {
                $updateVal['exchange_name'] = $_POST['exchange_name'];
                $updateVal['exchange_type'] = $_POST['exchange_type'];
                $updateVal['exchange_integration'] = $_POST['exchange_integration'];
                $updateVal['exchange_summary'] = $_POST['exchange_summary'];
                $updateVal['exchangez_details'] = $_POST['exchangez_details'];
                if ($_POST['exchange_image'] != "") {
                    $updateVal['exchange_image'] = $_POST['exchange_image'];
//                    $imageRedata = $this->addImage("exampleInputFile");
//                    $updateVal['exchange_image'] = $imageRedata["message"];
                }
                $this->updateExchange($updateVal, $_GET["ItemId"]);
                $this->ExchangeList();
            } else {
                $this->ExchangeList();
            }
        }
    }

    public function deleteExchange($exchangeModel_number) {

        if (!empty($exchangeModel_number)) {

            $exchange = new exchangeModel();

            $exchange->initialize('exchange_id like "' . $exchangeModel_number . '"');

            if ($exchange->vars_number > 0) {

                $exchange->remove();
            }
        }
    }

    public function addExchange($data) {

        $exchange = new exchangeModel();

        $exchange->insert($data);
    }

    public function updateExchange($data, $id) {

        $exchange = new exchangeModel();

        $exchange->initialize('exchange_id = ' . $id);

        if ($exchange->vars_number > 0) {

            $exchange->update($data);
        }
    }

    function addImage($fileRequestName) {
        $extNameArray = array('jpg', 'png');
        $extFlag = false;
        $eventFlag = FALSE;
        if (isset($_FILES[$fileRequestName])) {
            $fileName = $_FILES[$fileRequestName]['name'];
            $fileNameInfo = pathinfo($fileName);
            $fileNameExtension = $fileNameInfo['extension'];
            foreach ($extNameArray as $ext) {
                if (strtolower($fileNameExtension) == $ext) {
                    $extFlag = true;
                }
            }
            if (!$extFlag) {
                $requestMessage = '非法的文件后缀名';
                $eventFlag = TRUE;
            }

            $fileTmp = $_FILES[$fileRequestName]['tmp_name'];
            $imageinfo = getimagesize($fileTmp);
            if ($imageinfo[0] != $imageinfo[1]) {
                $requestMessage = '请上传正方形图片';
                $eventFlag = TRUE;
            } else if ($imageinfo[0] < 88 || $imageinfo[1] < 88) {
                $requestMessage = '请上传大于88*88且小于176*176的图片';
                $eventFlag = TRUE;
            } else if ($imageinfo[0] > 176 || $imageinfo[1] > 176) {
                $requestMessage = '请上传大于88*88且小于176*176的图片';
                $eventFlag = TRUE;
            }
            if ($eventFlag) {
                $runType["state"] = 1;
                $runType["message"] = $requestMessage;
                return $runType;
            } else {
                $expName = substr(strrchr($fileName, "."), 0);
                $fileUpDateTime = date("ymdhis" . rand(0, 800));
                $storeDir = GIFTIMAGEDIR;
                $overWrite = 1;
                $uploadsize = $_FILES[$fileRequestName]['size'];
                $fileSizeMax = 1024 * 1024 * 9;


                if ($uploadsize > $fileSizeMax) {
                    $requestMessage = '文件超出大小';
                    $eventFlag = TRUE;
//return false;
                } else if (file_exists($storeDir . $fileName) && !$overWrite) {
                    $requestMessage = '文件重名';
                    $eventFlag = TRUE;
//return false;
                } else if (!move_uploaded_file($fileTmp, $storeDir . $fileUpDateTime . $expName)) {
                    $requestMessage = '文件无法复制';
                    $eventFlag = TRUE;
//return false;
                } else {
                    if (strtolower($fileNameExtension) == "jpg") {
                        $src = imagecreatefromjpeg($storeDir . $fileUpDateTime . $expName);
                        $imgWidth = $imageinfo[0];
                        $imgHeight = $imageinfo[1];
                        $changeSize = 88;
                        $image = imagecreatetruecolor($changeSize, $changeSize);
                        imagecopyresampled($image, $src, 0, 0, 0, 0, $changeSize, $changeSize, $imgWidth, $imgHeight);
                        imagejpeg($image, $storeDir . "small/" . $fileUpDateTime . $expName);
                        imagedestroy($image);
                    } else if (strtolower($fileNameExtension) == "png") {
                        $src = imagecreatefrompng($storeDir . $fileUpDateTime . $expName);
                        $imgWidth = $imageinfo[0];
                        $imgHeight = $imageinfo[1];
                        $changeSize = 88;
                        $image = imagecreatetruecolor($changeSize, $changeSize);
                        imagecopyresampled($image, $src, 0, 0, 0, 0, $changeSize, $changeSize, $imgWidth, $imgHeight);
                        imagepng($image, $storeDir . "small/" . $fileUpDateTime . $expName);
                        imagedestroy($image);
                    }
                }
                if ($eventFlag) {
                    $runType["state"] = 1;
                    $runType["message"] = $requestMessage;
                    return $runType;
                } else {
                    $runType["state"] = 0;
                    $imgUrl = $fileUpDateTime . $expName;
                    $runType["message"] = $imgUrl;
                    return $runType;
                }
            }
        } else {
            
        }
    }

    public function searchExchange() {
        
    }

    public function checkExchangeCode() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['exchangeCode'])) {
                $Code = $_POST['exchangeCode'];
                $exchangeCode = new exchangeCodeModel();
                $exchangeCode->initialize("code='" . $Code . "'");
                $exchageCodeMesssage = $exchangeCode->vars;
                if ($exchangeCode->vars_number <= 0) {
                    $this->errorMessage = "验证码错误请确认后重试。";
                } else {
                    if ($exchageCodeMesssage["create_time"] < time() - 600) {
                        $this->errorMessage = "该验证码已经过期请重新获取。";
                    }else if($exchageCodeMesssage["state"]==1){
                        $this->errorMessage = "该验证码已被使用，请重新获取。";
                    }
                    else {
                        $userModel = new userModel();
                        $userModel->initialize("user_id = '" . $exchageCodeMesssage['user_id'] . "'");
                        $userMessage = $userModel->vars;
                        $exchangeModel = new exchangeModel();
                        $exchangeModel->initialize("exchange_id = '" . $exchageCodeMesssage['exchange_id'] . "'");
                        $exchageValue = $exchangeModel->vars;
                        if ($exchangeModel->vars_number <= 0) {
                            $this->errorMessage = "未获取到验证码对应的礼品信息，请重新获取验证码后重试。";
                        } else if ($userMessage["user_integration"] < $exchageValue["exchange_integration"]) {
                            $this->errorMessage = "用户当前积分为" . $userMessage["user_integration"] . "分，未达到兑换积分要求" . $exchageValue["exchange_integration"] . "分。";
                        } else {
                            $this->errorMessage = "验证成功，礼品相关信息请查看，所显示表格。";
                            $insertData["code_id"]=$exchageCodeMesssage['exchange_code_id'];
                            $insertData["create_time"]=  time();
                            $exchangeCodeVerification=new exchangeCodeVerificationModel();
                            $exchangeCodeVerification->insert($insertData);
                            $upDate["state"]=1;
                            $exchangeCode->update($upDate);
                            $_ENV['smarty']->assign('exchangeIteam', $exchageValue);
                        }
                    }
                }
            } else {
                $this->errorMessage = "未成功获取验证码 请重试。";
            }
        }
        $_ENV['smarty']->setDirTemplates('exchange');
        $_ENV['smarty']->assign('errorMessage', $this->errorMessage);
        $_ENV['smarty']->display('checkExchangeCode');
    }

}

?>