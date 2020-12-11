<?php 
 class Smsparents extends Model {

 	public function __construct() {
 		$table = 'sms_parents';
 		parent::__construct($table);

 	}

 	public function regNewParent($params) {
 		$this->insert($params);
 	}

 	public function findAllParents() {
 		$conditions = [
		];
		return $this->find($conditions);
 	}

 	public function findById($id) {
 		$conditions = [
 			'conditions' => ['pr_username= ?'],
			'bind' => [$id]
		];
		return $this->findFirst($conditions);
 	}

 	public function findByStuId($id) {
 		$conditions = [
 			'conditions' => ['pr_students= ?'],
			'bind' => [$id]
		];
		return $this->findFirst($conditions);
 	}


 	public static $addParentValidation = [
 			'nic' => [
		 				'display' => "NIC No",
			 			'required' => true
			 		],
			 'username' => [
			 			'display' => "Username",
			 			'required' => true,
			 		]

 	];
 }