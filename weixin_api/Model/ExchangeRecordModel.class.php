<?php



class ExchangeRecordModel extends Basic{


	public function __construct() {

		$this->child_name = 'exchange_record';

		parent::__construct();

	}


	public function addRecord($result,$userinfo){


		$data['exchange_id'] = $result['id'];

		$data['user_id'] = $userinfo['user_id'];

		$data['exchange_time'] = time();


		$this->insert($data);


		return $data;

	}

	public function getUserRecord($user_id){

		$this->clearUp();

		$this->initialize('user_id = '.$user_id);

		if($this->vars_number > 0){

			return  $this->vars_all;

		}

	}



}

?>
