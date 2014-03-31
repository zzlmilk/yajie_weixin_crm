<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class userApi {
    
    public function __construct() {
        
        
    }
    
   public function getUserInfo($open_id){
       
       if(!empty($open_id)){
        $data['open_id'] = $open_id;
        $data['source'] = 'company';
        $userInfoJson = transferData(APIURL . "/user/get_info", "post", $data);
        $userInfoArray = json_decode($userInfoJson,true);
        return $userInfoArray;
       }
      
   } 
    
    
}

?>

