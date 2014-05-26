<?php
require_once('lib/nusoap.php');

echo '<h2>Hello</h2>';

$client = new nusoap_client('http://www.jianzhou.sh.cn/JianzhouSMSWSServer/services/BusinessService?wsdl', true);
$client->soap_defencoding = 'utf-8';
$client->decode_utf8      = false;
$client->xml_encoding     = 'utf-8';
$err = $client->getError();
if ($err) {
    echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}
$params = array(
    'account' => 'test',
    'password' => '111111',
    'destmobile' =>  "13524446830",
    'msgText' => "sds【城建投资】",
);

$result = $client->call('sendBatchMessage', $params, 'http://www.jianzhou.sh.cn/JianzhouSMSWSServer/services/BusinessService');
if ($client->fault) {
    echo '<h2>Fault (This is expected)</h2><pre>'; print_r($result); echo '</pre>';
} else {
    $err = $client->getError();
    if ($err) {
        echo '<h2>Error</h2><pre>' . $err . '</pre>';
    } else {
        echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
    }
}


echo '<h2>Hello2</h2>';

?>
