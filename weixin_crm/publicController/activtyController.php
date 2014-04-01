<?php


class activtyController implements activty {



	public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('activty');
    }

	public function activty(){

		$activty = new activityModel();

		$activtyAll = $activty->getActivityList();

        $_ENV['smarty']->assign('activtyAll', $activtyAll);
        $_ENV['smarty']->display('activty');
	}

	public function activtyUpdate(){

		if(!empty($_REQUEST['activity_id']) && $_REQUEST['activity_id'] > 0){

			if(!empty($_REQUEST['activity_name']) && !empty($_REQUEST['activity_end_time']) && !empty($_REQUEST['activity_html'])){

				$data['activity_name'] = $_REQUEST['activity_name'];

				$data['activity_end_time'] = strtotime($_REQUEST['activity_end_time']);

				$data['activity_html'] = stripcslashes($_REQUEST['activity_html']);

				$data['ctime'] = time();

				$activty = new activityModel();

				$activty->initialize('activity_id = '.$_REQUEST['activity_id']);

				if($activty->vars_number > 0){

					$activty->update($data);
					
					$_ENV['smarty']->setDirTemplates('');

					$_ENV['smarty']->assign('link',WebSiteUrl.'/pageredirst.php?action=activty&functionname=activty');

					$_ENV['smarty']->assign('message','修改成功');

					$_ENV['smarty']->display('message');

				}
		   }
		}
	}

	public function activtyEdit(){

		if(!empty($_REQUEST['id']) && $_REQUEST['id'] > 0){

			$activty = new activityModel();

			$activty->initialize('activity_id = '.$_REQUEST['id']);

			if($activty->vars_number > 0){

				$_ENV['smarty']->assign('info',$activty->vars);

			} else{

				echo  'id 错误';
			}
		} else{

			echo '数据为空';
		}

		$_ENV['smarty']->display('activtyEdit');
	}

	public function addactivty(){


		$_ENV['smarty']->display('addactivty');

	}

	/**
	 * 活动添加
	 */

	public function activtyAdd(){

		if(!empty($_REQUEST['activity_name']) && !empty($_REQUEST['activity_end_time']) && !empty($_REQUEST['activity_html'])){

			$data['activity_name'] = $_REQUEST['activity_name'];

			$data['activity_end_time'] = strtotime($_REQUEST['activity_end_time']);

			$data['activity_html'] = stripcslashes($_REQUEST['activity_html']);

			$data['ctime'] = time();

			$activty = new activityModel();

			$id = $activty->insert($data);

			if($id > 0){

				$_ENV['smarty']->setDirTemplates('');

				$_ENV['smarty']->assign('link',WebSiteUrl.'/pageredirst.php?action=activty&functionname=addactivty');

				$_ENV['smarty']->assign('message','插入成功');

				$_ENV['smarty']->display('message');

			}
		}

	}

}



?>