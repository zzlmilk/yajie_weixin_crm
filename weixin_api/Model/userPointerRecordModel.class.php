<?php


class userPointerRecordModel extends Basic{



	public function __construct() {

		$this->child_name = 'user_points_record';

		parent::__construct();

    }

    public function  addRecord($user_id,$type,$fraction,$source,$id  = ''){

    	$data['user_id'] = $user_id;


    	$data['record_type'] = $type;

    	$data['fraction'] = $fraction;

    	$data['source'] = $source;

    	$data['exchange_id'] = $id;

        $data['create_time'] = time();

    	$this->insert($data);


    	return $data;

    }



}

?>