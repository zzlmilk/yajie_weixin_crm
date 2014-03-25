<?php

class QuestionController  implements question{

	/**
	 * 用户签到
	 */

	public function  get_question(){

		

			$question = new QuestionModel();

			$array = $question->get_info();

			$output = array();

			$number = array();

			foreach($array as $k=>$v){

				if($v['question_type'] == 1){

					$v['question_answer_1'] = explode(',', $v['question_answer_1']);

				} else{

					$v['question_answer_2'] = explode(',', $v['question_answer_2']);

				}


				$number[$k] = $v['question_id'];

				$output['question'][$k] = arrayToObject($v,0);

			}

			$output['title'] = implode(',', $number);

			AssemblyJson($output);

	

	}

	/**
	 * 获取用户签到信息
	 */

	public function add_question(){


		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['source']) && !empty($_REQUEST['field'])){

			$user = new userModel();

			$userInfo = $user->getUserInfo($_REQUEST['open_id']);

			

			


			if(count($userInfo) > 0){


				$record = new QuesionRecordModel();

			
				$array = $record->addData($_REQUEST['field'],$_REQUEST,$userInfo);

				AssemblyJson($array);
			}

		} else{

			echoErrorCode(105);

		}
	}
}
?>