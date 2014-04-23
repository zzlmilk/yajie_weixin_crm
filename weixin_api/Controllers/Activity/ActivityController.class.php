<?php

class ActivityController implements Activity {

    /**
     * 获取用户活动申请记录
     */
    public function get_activity() {

        if (!empty($_REQUEST['source'])) {

            $activity = new ActivityModel();

            $array = $activity->getActivity();
            AssemblyJson($array);
        }
    }

}

?>