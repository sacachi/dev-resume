<?php 
/**
 * 
 */
class Human
{
	public $id;
	public $name;
	public $lover =array();
	public function Human ($id, $name, $b = array()){
		$this->id = $id;
		$this->name = $name;
		$this->lover = $b;
	}
	public function initinateObject (){
		var $tuan = new Human(1, "Tuấn", [2,5,7,9,0]);
		var $be = new Human(2, "Bê", [1]);
		var $nam = new Human(3, "Nam", [5]);
		var $tran = new Human(4, "Trần", [2,5]);
		var $lan = new Human(5, "Lan", [1,3]);
		var $hoang = new Human(6, "Hoàng", [7]);
		var $hoa = new Human(7, "Hoa", [2,5,7,9]);
		var $manh = new Human(8, "Mạnh", [9]);
		var $tien = new Human(9, "Tiến", [0]);
	}
	
}