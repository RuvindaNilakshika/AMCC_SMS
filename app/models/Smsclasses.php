<?php 
 class Smsclasses extends Model {

 	public function __construct() {
 		$table = 'sms_classes';
 		parent::__construct($table);

 	}

 	public function addNewClass($params) {
 		$this->insert($params);
 	}

 	public function findclasses($classtype, $params = []) {
	 	$conditions = [
 			'conditions' => ['class_section= ?'],
			'bind' => [$classtype]
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 	public function findAllClasses($params = []) {
 		$conditions = [
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 	public function findByClass($classid) {
 		$conditions = [
 			'conditions' => ['class_id= ?'],
			'bind' => [$classid]
		];
		return $this->findFirst($conditions);
 	}

 	public function findByDbid($dbid) {
 		$conditions = [
 			'conditions' => ['db_id= ?'],
			'bind' => [$dbid]
		];
		return $this->findFirst($conditions);
 	}

 	public function updateClass($id, $fields) {
 		$this->update($id, $fields);
 	}

 	public function deleteClass($id) {
			$sql = "DELETE FROM sms_classes WHERE  db_id = {$id}";

			if (!$this->query($sql)->error()) {
 				return true;
 			}

 			return false;
 	}


 }