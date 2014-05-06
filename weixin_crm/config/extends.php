<?php

function setDatebase($database) {

    $_ENV['DBNAME'] = $database['DBNAME'];

    $_ENV['DBHOST'] = $database['DBHOST'];

    $_ENV['USER'] = $database['USER'];

    $_ENV['PASSWORD'] = $database['PASSWORD'];
}


function getWeixinToken($appid,$secret){


	$url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&'.'appid='.$appid.'&secret='.$secret;

    $token_info = transferData($url,'get');

    $token = json_decode($token_info,true);

    $company = new companyModel();

    $company->addCondition('appid like "'.$appid.'"', 1);

    $company->initialize();

    if($company->vars_number > 0){

        $id = $company->vars['company_id'];

        $companyToken = new companyTokenModel($id);

        if($companyToken->vars_number > 0 ){

            $companyToken->vars['token'] = $token['access_token'];

            $companyToken->vars['application_time'] = time();

            $companyToken->updateVars();

        } else{

            $insert['company_id'] = $id;

            $insert['token'] = $token['access_token'];

            $insert['expires_in'] = 7200;

            $insert['application_time'] = time();

            $companyToken->insert($insert);
        }
    }

    return $token['access_token'];

}

function sendCustom($open_id,$token,$content){

	$url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$token;
    
    $params = array("");  

    $params["touser"]=trim($open_id);  

    $params["msgtype"]="text";  

    $params["text"]["content"]=urlencode($content);      
    

    $ret = json_encode($params);

    $jsonArray = urldecode($ret);


    $result = transferData($url,'post',$jsonArray);

    return json_decode($result,true);
}


/**
 * 传递数据 
 *  $url  为接口调用的url 地址  
 *  $method  为传递的方式  POST  GER
 *  $data   当method 为post时  传值为array
 */
function transferData($url, $method, $data) {

    switch ($method) {

        case 'post':

            $output = curlPost($url, $data);

            break;

        case 'get':

            $output = curlGet($url);

            break;
    }

    return $output;
}

function curlPost($url, $post = null, $options = array()) {

     $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$post);
      $result =   curl_exec($ch);
        curl_close($ch);

        return $result;
}

function curlGet($url) {


    $defaults = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 4,
        CURLOPT_FOLLOWLOCATION => 1
    );

    $ch = curl_init();

    curl_setopt_array($ch, $defaults);

    if (!$result = curl_exec($ch)) {
        trigger_error(curl_error($ch));
    }

    curl_close($ch);

    return $result;
}

?>