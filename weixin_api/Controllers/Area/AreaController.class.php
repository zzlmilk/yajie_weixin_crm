<?php

class AreaController implements area {


	/**
	 * 获取兑换物品列表
	 */

	public function get_area(){

		$area_id =  $_REQUEST['area_id'];

		if(empty($area_id)){

			$area_id = 0;
		} 
		$area = new AreaModel();

		$areaArray = $area->getAreaByPid($area_id);

		$areaJsonArray = array();

		if(count($areaArray) > 0){

			foreach($areaArray as $k =>$v){

				$areaJsonArray[$k] = arrayToObject($v,0);

			}
			AssemblyJson($areaJsonArray);

		}
		
	}


}
?>