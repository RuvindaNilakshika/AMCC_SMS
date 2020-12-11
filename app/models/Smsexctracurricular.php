<?php 
 class Smsexctracurricular extends Model {

 	public function __construct() {
 		$table = 'sms_exctracurricular';
 		parent::__construct($table);

 	}

 	public function findByStuId($id) {
 		$conditions = [
 			'conditions' => ['student_id= ?'],
			'bind' => [$id]
		];
		return $this->findFirst($conditions);
 	}
 }