<?php

class userPointerRecordModel extends Basic{

	public function __construct() {

		$this->child_name = 'user_points_record';

		parent::__construct();

	}

	public function addRecord( $user_id, $type, $fraction, $source ) {

		if ( $user_id > 0 && $fraction >0 && $type > 0 ) {

			$record['user_id'] = $user_id;

			$record['record_type'] = 2;

			$record['fraction'] = $fraction;

			$record['source'] = $source;

			$record['create_time'] = time();

			$user_pointer_record = new userPointerRecordModel();

			$user_pointer_record->insert( $record );
		}
	}

	public function deleteRecord($user_id){

		if(!empty($user_id) && $user_id > 0 ){

			$user_pointer_record = new userPointerRecordModel();

			$user_pointer_record->initialize('user_id = '.$user_id);

			if($user_pointer_record->vars_number > 0 ){

				$user_pointer_record->remove();
			}

		}

	}



}


?>
