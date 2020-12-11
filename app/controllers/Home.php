<?php

	class Home extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
		}

		public function indexAction(){
			// dnd($_SESSION);
			//$db = DB::getInstance();
			/*$_columnNames = [];
			$columns = $db->get_columns('sms_users');
			foreach ($columns as $column) {
				$columnName = $column->Field;
				$_columnNames[] = $columnName;
			}
			dnd ($_columnNames); */
			//dnd ($db->get_columns('sms_users'));
			/* $s= 21;
			 $t= 'sms_users';
			 $x= 'Teacher';
			 $y= 'AkilaN';
			 $fields = [
			 	'usertype' => $x,
			 	'username' => $y
			 ];
			 $db->update('sms_users',21,$fields); */
			 //$s= "14980";
			//$q = "SELECT * FROM sms_users WHERE usertype = {$s}";
			// $bind = ['Admin'];
			//$stuQ = $db->query($q);
			// $user = "Akila";
			/*$stuQ =  $db->findFirst('sms_users', [
			 	'conditions' =>"username= ?",
			 	'bind' => [$user],
			 	'order' => "usertype",
			 	'limit' => 3
			 ]); 
			dnd($stuQ);*/
			
			 $this->view->render('home/index');

		} 
	}