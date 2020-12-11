<?php 
 class Sms1011marks extends Model {

 	public function __construct() {
 		$table = 'sms_10_11_marks';
 		parent::__construct($table);

 	}

 	public function addmarks($params) {
 		$this->insert($params);
 	}

 	public function findByclass($class, $term, $params = []) {
	 	$conditions = [
 			'conditions' => ['class= ?','exam_id= ?'],
			'bind' => [$class, $term]
		];
		$conditions = array_merge($conditions, $params);
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