<?php

class QuesionRecordModel extends basic {

    public function __construct() {

        $this->child_name = 'quesion_record';

        parent::__construct();
    }

    public function addData($field, $data, $user) {


        $field_array = explode(',', $field);

        $array = array();

        $k = 0;

        $fraction = 0;

        foreach ($field_array as $key => $value) {

            $this->addCondition('user_id = ' . $user['user_id'] . ' and question_id = ' . $value, 1);

            $this->initialize();

            if ($this->vars_number <= 0) {


                $questionconfig = new QuesionConfigModel($data['quesion_'.$value]);

                if($questionconfig->vars_number > 0){

                    $code = $questionconfig->vars['question_value'];

                } else{

                    $code = 0;
                }

                $fraction+=$code;

                $insertData['quesion_answer'] = $data['quesion_' . $value];

                $insertData['question_id'] = $value;

                $insertData['user_id'] = $user['user_id'];

                $insertData['ctime'] = time();

                //$id = $this->insert($insertData);

               
            }
        }

        $array['fraction'] = $fraction;

        return $array;
    }

}

?>