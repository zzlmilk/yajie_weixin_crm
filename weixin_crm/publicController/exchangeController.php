<?php

class exchangeController implements exchange {

    public $errorMessage = '';

    public function ExchangeList() {
        $exchangeModel = new exchangeModel();
        $exchangeModel->initialize();
        $exchangeList = $exchangeModel->vars_all;
        $_ENV['smarty']->setDirTemplates('exchange');
        $_ENV['smarty']->assign('exchangeList', $exchangeList);
        $_ENV['smarty']->display('ExchangeList');
    }

    public function addExchangeItem() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $imageReturnVal = $this->addImage("exampleInputFile");
            if ($imageReturnVal["state"] == 0) {
                $insertData['exchange_name'] = $_POST['exchange_name'];
                $insertData['exchange_type'] = $_POST['exchange_type'];
                $insertData['exchange_integration'] = $_POST['exchange_integration'];
                $insertData['exchange_summary'] = $_POST['exchange_summary'];
                $insertData['exchangez_details'] = $_POST['exchangez_details'];
                $insertData['exchange_image'] = $imageReturnVal["message"];
                $this->addExchange($insertData);
                $this->ExchangeList();
            } else {

                $_SERVER["REQUEST_METHOD"] = "GET";
                $this->errorMessage = $imageReturnVal['message'];
                $this->addExchangeItem();
            }
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
                if ($_FILES['exampleInputFile']["name"] != "") {
                    $imageRedata = $this->addImage("exampleInputFile");
                    $updateVal['exchange_image'] = $imageRedata["message"];
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
        $extNameArray = array('jpg', 'png', 'bmp');
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
            if ($imageinfo[0] != 88 || $imageinfo[1] != 88) {
                $requestMessage = '非法的图片大小';
                $eventFlag = TRUE;
            }


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
        } else {
            
        }
    }

    public function searchExchange() {
        
    }

}

?>