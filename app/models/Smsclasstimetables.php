<?php 
 class Smsclasstimetables extends Model {

 	public function __construct() {
 		$table = 'sms_class_timetables';
 		parent::__construct($table);

 	}

 	public function findAllTimetables($params = []) {
	 	$conditions = [
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 }