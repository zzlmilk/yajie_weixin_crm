<?php



class exchangeController implements exchange {



	public function addExchange($data){

		$exchange = new exchangeModel();

		$exchange->insert($data);

	}


	public function  updateExchange($data,$id){

		$exchange = new exchangeModel();

		$exchange->initialize('exchange_id = '.$id);

		if($exchange->vars_number > 0){

			$exchange->update($data);

		}

	}

	public function searchExchange(){

		
	}


}


?>