<?php 
 class Smsteachers extends Model {

 	public function __construct() {
 		$table = 'sms_teachers';
 		parent::__construct($table);

 	}

 	public function regNewTeacher($params) {
 		$this->insert($params);
 	}

 	public function findAllTeachers($params = []) {
 		$conditions = [
		];
		$conditions = array_merge($conditions, $params);
		return $this->find($conditions);
 	}

 	public function findByTeacherId($id) {
 		$conditions = [
 			'conditions' => ['db_id= ?'],
			'bind' => [$id]
		];
		return $this->findFirst($conditions);
 	}

 	public function findByusername($uname) {
 		$conditions = [
 			'conditions' => ['tch_username= ?'],
			'bind' => [$uname]
		];
		return $this->findFirst($conditions);
 	}

 	public function findByClass($classid) {
	 	$conditions = [
 			'conditions' => ['tch_class= ?'],
			'bind' => [$classid]
		];
		return $this->findFirst($conditions);
 	}

 	public function deleteTeacher($id) {
			$sql = "DELETE FROM sms_teachers WHERE  db_id = {$id}";

			if (!$this->query($sql)->error()) {
 				return true;
 			}

 			return false;
 	}

 	public function updateTeacher($id, $fields) {
 		$this->update($id, $fields);
 	}

 	public function assignd($params) {
 		$this->combine($params);
 	}

 	public static $addTeacherValidation = [
 			'regno' => [
		 				'display' => "Registration No",
			 			'required' => true
			 		],
			 'username' => [
			 			'display' => "Username",
			 			'required' => true,
			 		]

 	];
  
 }