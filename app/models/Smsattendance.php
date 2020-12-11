<?php 
 class Smsattendance extends Model {

 	public function __construct() {
 		$table = 'sms_attendance';
 		parent::__construct($table);

 	}

 	public function addattendance($feilds, $params) {
 		$feildString = $feilds;
 		$valueString = $params;
 		$sql = "INSERT INTO 'sms_attendance' ({$feildString}) VALUES({$valueString})";

 		if ($this->prepsql($sql)) {
 				return true;
 			}

 			return false;
 	}

 	public function findByDate($date, $classid) {
	 	$conditions = [
 			'conditions' => ['date= ?', 'class_id= ?'],
			'bind' => [$date, $classid]
		];
		return $this->find($conditions);
 	}

 	public function findById($id) {
	 	$conditions = [
 			'conditions' => ['student_id= ?'],
			'bind' => [$id]
		];
		return $this->find($conditions);
 	}

 }