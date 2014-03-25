<?php

class ActivityModel extends basic{

		public function __construct() {

		$this->child_name = 'activity';

		parent::__construct();

    }


    public function getActivity(){

    	$activity = new ActivityModel();

    	$activity->randOffset(1);

    	$activity->addorderby('ctime DESC');

    	$activity->initialize();

        $apply = new ApplyModel();

        $apply_record = $apply->getInfoAll($activity->vars['activity_id']);

    	$info = $this->secIncReadNumber($activity->vars);

        $info['record'] = $apply_record;

        return arrayToObject($info,0);
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