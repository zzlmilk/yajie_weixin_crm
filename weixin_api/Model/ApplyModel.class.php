<?php

class ApplyModel extends basic{

		public function __construct() {

		$this->child_name = 'apply';

		parent::__construct();

    }

    /**
     * 获取用户申请信息
     */

    public function getInfoAll($id){

        if(!empty($id)){

            $this->clearUp();

             $this->initialize('activity_id = '.$id);

             return $this->vars_all;

        }

    }

    public function addApply($data){

    	$activity = new ActivityModel();

    	$activity_info = $activity->getInfoActivity($data['activity_id']);

    	if(count($activity_info) > 0){

        $activity->setIncApplyNumber($data['activity_id']);

    		$insert['activity_id'] = $activity_info['activity_id'];

    		$insert['real_name'] = $data['real_name'];

    		$insert['user_phone'] = $data['user_phone'];

        $insert['apply_time'] = time();


  			$this->insert($insert);


  			return $data;


    	} else{

        echo '此活动不存在';

        die;

    	}

    }


}

?>