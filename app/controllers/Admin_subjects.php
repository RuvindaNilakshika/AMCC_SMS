<?php

	class Admin_subjects extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
			$this->load_model('Smssubjects');
		}

		public function add_subjectAction(){
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
			 		$newSubject->addNewSubject($feilds);
			 		//dnd($newStudent);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'admin_subjects/view_subjects');
			 	}
			 }

			$this->view->render('admin_subjects/add_subject');	
		} 

		public function view_subjectsAction(){
			 $allsubjects = $this->SmssubjectsModel->findAllSubjects(['order'=>'db_id']);
			 $this->view->allsubjects = $allsubjects;
			 $this->view->render('admin_subjects/view_subjects');	
		} 

		public function edit_subjectAction($id){

			 $this->view->render('admin_classes/edit_subject');	
		}  
		
		public function delete_subjectAction($id){
			 
		}
		

	}