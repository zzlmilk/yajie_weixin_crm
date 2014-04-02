<?php

/** 
 * 用户模块下  订单的操作
 */
class orderControllers  extends BaseController  {

    /** 
     * 获取用户所有的订单信息
     */
   public function getAllOrder($source,$open_id) {
        // $this->userOpenId = $_REQUEST['open_id'];
       
        $postUserDate['source'] = $source;
        $postUserDate['open_id'] = $open_id;
        $DateValue = transferData(APIURL . "/order/get_order_all", "post", $postUserDate);
        $DateValue = json_decode($DateValue, TRUE);
        $this->assign("orders", $DateValue['order']);
        $this->display();
    }
   

}

?>