<?php

	class Admin_timetables extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
			$this->load_model('Smsclasstimetables');
		}

		public function add_timetableAction(){

			 $this->view->render('admin_timetables/add_timetable');	
		} 

		public function view_timetableAction(){
			 $alltimetables = $this->SmsclasstimetablesModel->findAllTimetables(['order'=>'db_id']);
			 $this->view->alltimetables = $alltimetables;
			 $this->view->render('admin_timetables/view_timetable');	
		} 

		public function edit_timetableAction($id){

			 $this->view->render('admin_classes/edit_timetable');	
		}  
		
		public function delete_timetableAction($id){
			 
		}
		

	}