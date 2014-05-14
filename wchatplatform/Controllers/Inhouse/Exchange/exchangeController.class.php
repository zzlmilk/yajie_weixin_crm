<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of exchangeController
 *
 * @author zhaixiaoping
 */
class exchangeController extends BaseController {

    //put your code here

    public function __construct() {


        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            //$this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';         
        }

        $this->assign('open_id', $this->userOpenId);
    }

    //兑换列表
    public function getExchangeList() {


//        $this->able_register();
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $this->userOpenId;
        //$this->userOpenId = $_REQUEST['open_id'];
        $exchangeList = transferData(APIURL . "/exchange/get_exchange_list?source=" . SOURCE . "&open_id=" . $this->userOpenId, "get");
        $exchangeList = json_decode($exchangeList, true);

        $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
        $userInfo = json_decode($userInfo, TRUE);
        $weixinUserInfo = $userInfo['weixin_user'];
        $localUserInfo = $userInfo['user'];
        $error = new errorApi();
        $error->JudgeError($exchangeList);
        $error->JudgeError($userInfo);

        $this->assign("WebImageUrl", WebImageUrl . "small/");
        $this->assign("exchangeList", $exchangeList);
        $this->assign("localUserInfo", $localUserInfo);
        $this->assign("weixinUserInfo", $weixinUserInfo);
        $this->display("getExchangeList");
    }

    //兑换物品详情
    public function exchangeGoods() {
        // $this->userOpenId = $_REQUEST['open_id'];
        $exchangeItem = transferData(APIURL . "/exchange/get_exchange_info?exchange_id=" . $_GET['goodsId'] . '&source=' . SOURCE, "get");
        $exchangeItem = json_decode($exchangeItem, true);

        $error = new errorApi();

        $error->JudgeError($exchangeItem);

        $this->assign("WebImageUrl", WebImageUrl . "small/");
        $this->assign("exchangeInfo", $exchangeItem["exchange_info"]);
        $this->display("exchangeGoods");
    }

    //兑换物品
    public function changeGoods() {

//$this->userOpenId = $_REQUEST['open_id'];
        if (isset($_GET['goodsId'])) {
            $postDate["source"] = SOURCE;
            $postDate['open_id'] = $this->userOpenId;
            $goodsId = $_GET['goodsId'];
            $exchangeItem = transferData(APIURL . "/exchange/get_exchange_info?exchange_id=" . $goodsId, "get");
            $exchangeItem = json_decode($exchangeItem, true);

            $error = new errorApi();

            $error->JudgeError($exchangeItem);

            if ($exchangeItem['exchange_info']["exchange_type"] == "1") {
                $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
                $userInfo = json_decode($userInfo, TRUE);

                $error = new errorApi();

                $error->JudgeError($userInfo);
                if ($userInfo['user']['province_id'] == "0") {
                    $this->assign("userMessage", $userInfo['user']);
                    $this->locationCheck(); //填写信息              
                } else {
                    // var_dump($userInfo); //显示地址页面     
                    $userData['street'] = $userInfo['user']['street'];
                    $userData['address_phone'] = $userInfo['user']['address_phone'];
                    $userData['real_name'] = $userInfo['user']['real_name'];
                    $userData['area_id'] = $userInfo['user']['area_id'];
                    $userData['city_id'] = $userInfo['user']['city_id'];
                    $userData['province_id'] = $userInfo['user']['province_id'];
                    $getProvince = transferData(APIURL . "/area/get_area", "get");
                    $getProvince = json_decode($getProvince, true);

                    $error = new errorApi();

                    $error->JudgeError($getProvince);

                    array_pop($getProvince);
                    $getTown = $this->getAreaMessage($userData['province_id']);
                    $getTown = json_decode($getTown, true);
                    $getArea = $this->getAreaMessage($userData['city_id']);
                    $getArea = json_decode($getArea, true);

                    $this->assign("provinceValue", $getProvince);
                    $this->assign("townValue", $getTown);
                    $this->assign("areaValue", $getArea);
                    $goodsId = $_GET['goodsId'];
                    $this->assign("userMessage", $userData);
                    $this->assign("goodsId", $goodsId);
                    $this->display("locationCheck");
                }
            } else {
                $this->changeGoodsResult();
            }
        }
    }

    public function locationCheck() {
        $getProvince = transferData(APIURL . "/area/get_area", "get");
        $getProvince = json_decode($getProvince, true);

        $error = new errorApi();

        $error->JudgeError($getProvince);

        array_pop($getProvince);



        $getTown = $this->getAreaMessage($getProvince[0]['area_id']);

        $getTown = json_decode($getTown, true);
        $getArea = $this->getAreaMessage($getTown[0]['area_id']);
        $getArea = json_decode($getArea, true);
        $this->assign("provinceValue", $getProvince);
        $this->assign("townValue", $getTown);
        $this->assign("areaValue", $getArea);
        $this->assign("goodsId", $_GET['goodsId']);
        $this->display("locationCheck");
    }

    public function getAreaMessage($areaId = 0) {
        $requestFlag = true;
        if (isset($_REQUEST["areaId"])) {
            $areaId = $_REQUEST["areaId"];
            $requestFlag = FALSE;
        } else {
            $areaId = $areaId;
        }
        $postDate['area_id'] = $areaId;
        $getArea = transferData(APIURL . "/area/get_area", "post", $postDate);
        if ($requestFlag) {
            return $getArea;
        } else {
            header("Content-type: application/json");
            echo $getArea;
        }
    }

    public function updateUserLocation() {
        if (isset($_POST["gNumber"])) {
            if (ctype_digit($_POST["gNumber"])) {
                $postData['address_phone'] = $_POST["address_phone"];
                $postData['province_id'] = $_POST["province_id"];
                $postData['city_id'] = $_POST["city_id"];
                $postData['area_id'] = $_POST["area_id"];
                $postData['street'] = $_POST["street"];
                $postData['real_name'] = $_POST["real_name"];
                $postData['open_id'] = $this->userOpenId;
                $postData['source'] = SOURCE;
                $updateUserLocation = transferData(APIURL . "/user/update_user_address", "post", $postData);
                $updateUserLocation = json_decode($updateUserLocation, TRUE);

                $error = new errorApi();

                $error->JudgeError($updateUserLocation);

                if ($updateUserLocation["res"] == 1) {
                    $_GET['goodsId'] = $_POST["gNumber"];
                    $this->changeGoodsResult();
                } else {

                    $this->displayMessage('提交用户信息出错');

                    die;
                }
            } else {

                $this->displayMessage('参数错误');

                die;
            }
        } else {

            $this->displayMessage('错误');

            die;
        }
    }

//处理兑换结果
    public function changeGoodsResult() {
        if (isset($_GET['goodsId'])) {
            $postDate["source"] = SOURCE;
            $postDate['open_id'] = $this->userOpenId;
            $postDate['id'] = $_GET['goodsId'];
            $exchangeList = transferData(APIURL . "/exchange/redeem", "post", $postDate);
            $exchangeList = json_decode($exchangeList, TRUE);

            $error = new errorApi();

            $error->JudgeError($exchangeList);


            $userIntegration = $exchangeList['user_integration']['user_integration'];
            $userChangeInfo = $exchangeList['exchange_info'];
            $this->assign("integration", $userIntegration);
            $this->assign("changeInfo", $userChangeInfo);
            $this->display("changeScuessList");
        } else {

            $this->displayMessage('错误的进入方式');
        }
    }

    public function changeScuessList() {
        $this->display("changeScuessList");
    }

    /*
     * 获取用户兑换记录
     */

    public function getUserExchangeRecord() {


        if (!empty($this->userOpenId)) {

            $exchangeApi = new exchangeApi();

            $exchangeReocrd = $exchangeApi->getUserExchangeInfo($this->userOpenId, 'Inhouse');






            $this->assign("WebImageUrl", WebImageUrl . "small/");

            $this->assign('exchangeList', $exchangeReocrd);

            $this->display('userExchangeRecord');
        } else {

            $this->displayMessage('open_id未获取到 请重新从微信公众平台登录');
        }
    }

}
