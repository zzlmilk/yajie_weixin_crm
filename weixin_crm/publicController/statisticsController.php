<?php

class statisticsController implements SMS {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('statistics');
    }

    public function statistics() {


    	$array = array();

    	$number = array();


    	for($i = 1; $i<=12;$i++){

    		$val = $i.'月';

    		array_push($array, $val);

    		array_push($number,rand(1,10000));

    	}

    	
    	$XVAL = json_encode($array);

    	$YVAL = json_encode($number);

    	if(!empty($_REQUEST['type'])){

    		$type = $_REQUEST['type'];

    	} else{

    		$type = 1;
    	}

    	$_ENV['smarty']->assign('type',$type);

    	$_ENV['smarty']->assign('XVAL',$XVAL);

    	$_ENV['smarty']->assign('YVAL',$YVAL);
     
        $_ENV['smarty']->display('statistics');
    }
}

?>
