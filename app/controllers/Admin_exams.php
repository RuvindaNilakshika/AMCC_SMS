<?php

	class Admin_exams extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
			$this->load_model('Smsexams');
		}

		public function add_examsAction(){
			$validation = new Validate();
			if (isset($_POST['subsubmit'])) {
			 	$posted_values = posted_values($_POST);
			 	$column= ['subject_name', 'subject_section', 'subject_id'];
			 	array_pop($posted_values);


			 	if (!empty($posted_values)) {
			 	//array_pop($posted_values);
			 	//array_shift(array);
				foreach ($posted_values as $key => $val) {
					$values[] = sanitize($val);
				}
				 $feilds = array_combine($column, $values);
				}
				//dnd($feilds);

			 	if (is_array($feilds)) {
			 		$newSubject = new Smssubjects();
			 		$newSubject->addNewExam($feilds);
			 		//dnd($newStudent);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'admin_exams/view_exams');
			 	}
			 }

			$this->view->render('admin_exams/add_exams');	
		} 

		public function view_examsAction(){
			 $allexams = $this->SmsexamsModel->findAllExams(['order'=>'db_id']);
			 $this->view->allexams = $allexams;
			 $this->view->render('admin_exams/view_exams');	
		} 

		public function edit_examsAction($id){

			 $this->view->render('admin_exams/edit_exams');	
		}  
		
		public function delete_subjectAction($id){
			 
		}
		

	}