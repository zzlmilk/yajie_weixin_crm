<?php

class QuesionRecordModel extends basic{

		public function __construct() {

		$this->child_name = 'quesion_record';

		parent::__construct();

    }

    public function addData($field,$data,$user){

    	$field_array = explode(',', $field);

        $array = array();

        $k = 0;


        
        foreach ($field_array as $key => $value) {
            
            $insertData['quesion_answer'] = json_encode($data['quesion_'.$value]);

            $insertData['question_id'] = $value;

            $insertData['user_id'] = $user['user_id'];

            $insertData['ctime'] = time();

            $id = $this->insert($insertData);

            if($id > 0){

                $array[$value] = arrayToObject($insertData,0);

                $k++;

            }
        }

        return $array;

    }


}

?>