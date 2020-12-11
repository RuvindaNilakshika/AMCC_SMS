<?php 
 class Smsstudents extends Model {

 	public function __construct() {
 		$table = 'sms_students';
 		parent::__construct($table);

 	}

 	public function regNewStudent($params) {
 		$this->insert($params);
 	}

 	public function findAllStudents($params = []) {
 		$conditions = [
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 	public function findByStuId($id) {
 		$conditions = [
 			'conditions' => ['db_id= ?'],
			'bind' => [$id]
		];
		return $this->findFirst($conditions);
 	}

 	public function findById($id) {
 		$conditions = [
 			'conditions' => ['stu_username= ?'],
			'bind' => [$id]
		];
		return $this->findFirst($conditions);
 	}

 	public function findByclass($id) {
 		$conditions = [
 			'conditions' => ['stu_class= ?'],
			'bind' => [$id]
		];
		return $this->find($conditions);
 	}

 	public function findclassStudents($class, $params = []) {
	 	$conditions = [
 			'conditions' => ['stu_class= ?'],
			'bind' => [$class]
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 	public function deleteStudent($id) {
			$sql = "DELETE FROM sms_students WHERE  stu_indexno = {$id}";

			if (!$this->query($sql)->error()) {
 				return true;
 			}

 			return false;
 	}

 	public function updateStudent($id, $fields) {
 		$this->update($id, $fields);
 	}

 	public function assignd($params) {
 		$this->combine($params);
 	}

 	public static $addstudentValidation = [
 			'indexno' => [
		 				'display' => "Index No",
			 			'required' => true
			 		],
			 'username' => [
			 			'display' => "Username",
			 			'required' => true,
			 		]

 	];
  
 }