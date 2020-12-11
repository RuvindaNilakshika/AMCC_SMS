<?php 
 class Smsexams extends Model {

 	public function __construct() {
 		$table = 'sms_exams';
 		parent::__construct($table);

 	}

 	public function findAllExams($params = []) {
 		$conditions = [
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 	public function addmarks($params) {
 		$this->insert($params);
 	}

 	public function findBygrade($grade) {
	 	$conditions = [
 			'conditions' => ['grade= ?'],
			'bind' => [$grade]
		];
		//$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}


 }