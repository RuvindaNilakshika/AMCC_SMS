<?php 
 class Smssubjects extends Model {

 	public function __construct() {
 		$table = 'sms_subjects';
 		parent::__construct($table);

 	}

 	public function addNewSubject($params) {
 		$this->insert($params);
 	}

 	public function findAllSubjects($params = []) {
	 	$conditions = [
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 }