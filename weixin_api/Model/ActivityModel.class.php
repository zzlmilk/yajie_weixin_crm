<?php

class ActivityModel extends basic{

		public function __construct() {

		$this->child_name = 'activity';

		parent::__construct();

    }

    public function getInfoActivity($id){

$activity = new ActivityModel();

        $activity->initialize('activity_id = '.$id);

        if($activity->vars_number > 0){

            return $activity->vars;
        }

    }

    public function getActivity(){

    	$activity = new ActivityModel();

    	$activity->randOffset(1);

    	$activity->addorderby('ctime DESC');

    	$activity->initialize();

        $apply = new ApplyModel();

        $apply_record = $apply->getInfoAll($activity->vars['activity_id']);

    	$info['info'] = arrayToObject($this->secIncReadNumber($activity->vars),0);

        $info['record'] = $apply_record;

        return $info;
    }


    public function secIncReadNumber($info){


    	$activity = new ActivityModel();

    	$activity->initialize('activity_id = '.$info['activity_id']);

    	if($activity->vars_number > 0){

    		$activity->vars['read_number']+=1;

    		$activity->updateVars();
    	}

    	return $activity->vars;

    }

    public function setIncApplyNumber($id){

        $activity = new ActivityModel();

        $activity->initialize('activity_id = '.$id);

        if($activity->vars_number > 0){

            $activity->vars['apply_number']+=1;

            $activity->updateVars();
        }

    }


}

?>