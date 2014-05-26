<?php

class giftController implements gift {

    public function getGiftList($type) {
        
    }

    public function updateGift($data) {
        
    }

    /*
     * 修改大转盘游戏 一二三等奖的概率配置
     * */

    public function updateGiftRate() {


        if (!empty($_REQUEST['gift_type']) && $_REQUEST['gift_type'] > 0) {

            $gift = new giftModel();

            $gift->initialize('gift_type = ' . $_REQUEST['gift_type']);

            $probabilityArray = $_REQUEST['probability'];


            $sumProbability = array_sum($probabilityArray);

             if ($_REQUEST['gift_type'] == "1") {
                        //$this->getBigWheelList();

               $url  = WebSiteUrl.'/pageredirst.php?action=gift&functionname=getBigWheelList';


             } else if ($_REQUEST['gift_type'] == "2") {


                $url  = WebSiteUrl.'/pageredirst.php?action=gift&functionname=getCardList';
             }


            if ($gift->vars_number > 0 && $sumProbability <=100) {

                $data = array();

                foreach($gift->vars_all as $k=>$v){

                    if($v['gift_probability']!=$probabilityArray[$k]){

                        $giftDetail = new giftModel();

                        $giftDetail->addCondition('gift_key ='.$v['gift_key'],1);

                        $giftDetail->initialize();


                        $update['gift_probability'] = $probabilityArray[$k];

                        $giftDetail->update($update);

                    }

                } 

                $_ENV['smarty']->setDirTemplates('');

                $_ENV['smarty']->assign('link',$url);

                $_ENV['smarty']->assign('message','修改成功');

                $_ENV['smarty']->display('message');

            } else{
                     
                $_ENV['smarty']->setDirTemplates('');

                $_ENV['smarty']->assign('link',$url);

                $_ENV['smarty']->assign('message','概率总值不能大于100');

                $_ENV['smarty']->display('message');

           }
        }
    }

    /**
     *  获取刮刮卡礼品列表
     */
    public function getCardList() {
        $gift = new giftModel();

        $gift->initialize('gift_type = 2');


        $_ENV['smarty']->assign('giftSetting', $gift->vars_all);

        $_ENV['smarty']->setDirTemplates('gift');

        $_ENV['smarty']->assign('name', 111);

        $_ENV['smarty']->display('getCardList');
    }

    /**
     *  获取大转盘礼品列表
     */
    public function getBigWheelList() {


        $giftSetting = new giftModel();

        $giftSetting->initialize('gift_type = 1');


       

        $_ENV['smarty']->assign('giftSetting', $giftSetting->vars_all);


        $_ENV['smarty']->setDirTemplates('gift');

        $_ENV['smarty']->assign('name', 1234);

        $_ENV['smarty']->display('getBigWheelList');
    }

    /**
     * 获取一二三等奖的概率
     */
    public function getProbabilityInfo() {

        $_ENV['smarty']->setDirTemplates('gift');

        $_ENV['smarty']->assign('name', 1234);

        $_ENV['smarty']->display('getBigWheelList');
    }

}

?>