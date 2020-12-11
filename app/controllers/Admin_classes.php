<?php

	class Admin_classes extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
			$this->load_model('Smsstudents');
			$this->load_model('Smsclasses');
		}

		public function six_nine_selectAction(){
			 $classes = $this->SmsclassesModel->findclasses('6-9', ['order'=>'db_id']);
			 $this->view->classes = $classes;
			 $this->view->render('admin_classes/six_nine_select');	
		}
		
		public function ten_eleven_selectAction(){
			 $classes = $this->SmsclassesModel->findclasses('10-11', ['order'=>'db_id']);
			 $this->view->classes = $classes;
			 $this->view->render('admin_classes/ten_eleven_select');	
		}

		public function twleve_thirteenselectAction(){
			 $classes = $this->SmsclassesModel->findclasses('12-13', ['order'=>'db_id']);
			 $this->view->classes = $classes;
			 $this->view->render('admin_classes/twleve_thirteen_select');	
		}

		public function view_classAction(){
			 if (isset($_POST['csubmit'])) {
			 	$class = $_POST['class_id'];;
			 }
			 $students = $this->SmsstudentsModel->findclassStudents($class, ['order'=>'stu_regday']);
			 $this->view->students = $students;
			 $this->view->render('admin_classes/view_class');	
		}

		public function add_classAction(){
			$validation = new Validate();
			if (isset($_POST['csubmit'])) {
			 	$posted_values = posted_values($_POST);
			 	$column= ['year', 'grade', 'section', 'class_id', 'class_section'];
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
			 		$newClass = new Smsclasses();
			 		$newClass->addNewClass($feilds);
			 		//dnd($newStudent);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'admin_classes/view_classes');
			 	}
			 }

			$this->view->displayErrors = $validation->displayErrors();	
			$this->view->render('admin_classes/add_class');	
		} 

		public function view_classesAction(){
			 $allclasses = $this->SmsclassesModel->findAllClasses(['order'=>'db_id']);
			 $this->view->allclasses = $allclasses;
			 $this->view->render('admin_classes/view_classes');	
		}

		public function edit_classAction($id){
			$classid = $this->SmsclassesModel->findByDbid($id);
			if (!$classid) {
				header("Location: ".PROOT.'admin_classes/view_classes');

			}
			if (isset($_POST['cedsubmit'])) {
				$db_id = $_POST['db_id'];
			 	$column= ['year', 'grade', 'section', 'class_id', 'class_section'];
			 	$posted_values = posted_values($_POST);
			 	array_shift($posted_values);
			 	array_pop($posted_values);

			 	if (!empty($posted_values)) {
				foreach ($posted_values as $key => $val) {
					$values[] = sanitize($val);
				}
				 $feilds = array_combine($column, $values);
				}

			 	
			 	$newClass = new Smsclasses();
			 		
			 	$newClass->updateClass($db_id, $feilds);
			 	header("Location: ".PROOT.'admin_classes/view_classes');
			 	
				
			}
			$this->view->classid = $classid;
			$this->view->postAction = PROOT . 'admin_classes' . DS . 'edit_class' . DS . $classid->db_id;
			$this->view->render('admin_classes/edit_class');	
		} 
		
		public function delete_classAction($id) {
			$student = $this->SmsclassesModel->deleteClass($id);
			header("Location: ".PROOT.'admin_classes/view_classes');

		} 

	}