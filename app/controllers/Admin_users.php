<?php

	class Admin_users extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
			$this->load_model('Smsstudents');
			$this->load_model('Smsteachers');		
			$this->load_model('Smsparents');
			$this->load_model('Smsusers');
		}

		public function studentsAction(){
			 $students = $this->SmsstudentsModel->findAllStudents(['order'=>'stu_regday']);
			 $this->view->students = $students;
			 $this->view->render('admin_users/students');

		} 

		public function teachersAction(){
			 $teachers = $this->SmsteachersModel->findAllTeachers(['order'=>'tch_regday']);
			 $this->view->teachers = $teachers;
			 $this->view->render('admin_users/teachers');	
		} 

		public function parentsAction(){
			 $parents = $this->SmsparentsModel->findAllParents();
			 $this->view->parents = $parents;
			 $this->view->render('admin_users/parents');	
		}
		
		public function add_studentAction(){
			 $validation = new Validate();
			 if (isset($_POST['ssubmit'])) {
			 	$column= ['stu_indexno', 'stu_fullname', 'stu_namewi', 'stu_username','stu_email', 'stu_NIC', 'stu_gender', 'stu_birthday','stu_address', 'stu_transport', 'stu_contact', 'stu_sdissices','stu_bloodgrp', 'stu_gardnerNIC', 'stu_pschool', 'stu_regday', 'stu_grade', 'stu_class', 'stu_descrip', 'stu_photo', 'stu_photoname'];
			 	$posted_values = posted_values($_POST);
			 	array_pop($posted_values);
			 	$image = addslashes($_FILES['image']['tmp_name']);
			 	$imagename = addslashes($_FILES['image']['name']);
			 	$image = file_get_contents($image);
			 	$image = base64_encode($image);
			 	array_push($posted_values, $image, $imagename);
			 	//dnd($posted_values);

			 	if (!empty($posted_values)) {
			 	//array_shift(array);
				foreach ($posted_values as $key => $val) {
					$values[] = sanitize($val);
				}
				 $feilds = array_combine($column, $values);
				}
				//dnd($feilds);

			 	$validation->check($_POST, Smsstudents::$addstudentValidation);

			 	if ($validation->passed()) {
			 		$newStudent = new Smsstudents();
			 		$newStudent->regNewStudent($feilds);
			 		//dnd($newStudent);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'admin_users/students');
			 	}
			 }

			 $this->view->displayErrors = $validation->displayErrors();
			 $this->view->render('admin_users/add_student');	
		}

		public function add_teacherAction(){
			$validation = new Validate();
			if (isset($_POST['tsubmit'])) {
			 	$posted_values = posted_values($_POST);
			 	$column= ['tch_regno', 'tch_fullname', 'tch_namewi', 'tch_username', 'tch_email', 'tch_nic', 'tch_gender', 'tch_birthday', 'tch_address', 'tch_contact', 'tch_pschool', 'tch_jobstarteddate', 'tch_regday', 'tch_qualifications', 'tch_subjects', 'tch_class', 'tch_descrip', 'tch_photo'];
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


			 	$validation->check($_POST, Smsteachers::$addTeacherValidation);

			 	if ($validation->passed()) {
			 		$newStudent = new Smsteachers();
			 		$newStudent->regNewTeacher($feilds);
			 		//dnd($newStudent);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'admin_users/teachers');
			 	}
			 }

			$this->view->displayErrors = $validation->displayErrors();			
			$this->view->postAction = PROOT . 'admin_users' . DS . 'add_teacher';			
			$this->view->render('admin_users/add_teacher');	
		} 

		public function add_parentAction(){
			$validation = new Validate();
			if (isset($_POST['psubmit'])) {
			 	$posted_values = posted_values($_POST);
			 	$column= [ 'pr_namewi', 'pr_username', 'pr_email', 'pr_nic', 'pr_address', 'pr_contact', 'pr_students', 'pr_relationship', 'pr_descrip'];
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


			 	$validation->check($_POST, Smsparents::$addParentValidation);

			 	if ($validation->passed()) {
			 		$newParent = new Smsparents();
			 		$newParent->regNewParent($feilds);
			 		//dnd($newStudent);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'admin_users/parents');
			 	}
			 }

			$this->view->displayErrors = $validation->displayErrors();			
			$this->view->postAction = PROOT . 'admin_users' . DS . 'add_parent';
			$this->view->render('admin_users/add_parent');	
		} 

		public function reg_userAction(){
			 $validation = new Validate();
			 $posted_values = ['usertype'=>'', 'username'=>'', 'password'=>'', 'confpassword'=>''];
			 if (isset($_POST['register'])) {
			 	$posted_values = posted_values($_POST);
			 	//foreach ($posted_values as $key => $value) {
					//$key = Input::sanitize($value);}

			 	$validation->check($_POST, [
			 		'usertype' => [
		 				'display' => "Usertype",
			 			'required' => true
			 		],
			 		'username' => [
			 			'display' => "Username",
			 			'required' => true,
			 		],
			 		'password' => [
			 			'display' => "Password",
			 			'required' => true
			 		],
			 		'confpassword' => [
			 			'display' => "Confirm Password",
			 			'required' => true
			 		]
				 	]);

				$usertype = $_POST['usertype'];
				$username = $_POST['username'];
				$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			 	$feilds = ['usertype'=> $usertype, 'username'=>$username, 'password'=>$password];
			 	if ($validation->passed()) {
			 		$newUser = new Smsusers();
			 		$newUser->regNewUser($feilds);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'admin/admin_dashbord');
			 	}
			 }

			 $this->view->post = $posted_values;
			 $this->view->displayErrors = $validation->displayErrors();
			 $this->view->render('admin_users/reg_user');	
		} 

		public function registeredusersAction(){
			 $users = $this->SmsusersModel->findAllUsers(['order'=>'db_id']);
			 $this->view->users = $users;
			 $this->view->render('admin_users/registeredusers');	
		}

		public function edit_userAction(){;
			 $this->view->render('admin_users/edit_user');	
		}

		public function delete_userAction($id) {
			$student = $this->SmsusersModel->deleteuser($id);
			header("Location: ".PROOT.'admin_users/registeredusers');

		} 

		public function delete_studentAction($id) {
			$student = $this->SmsstudentsModel->deleteStudent($id);
			header("Location: ".PROOT.'admin_users/students');

		} 

		public function delete_teacherAction($id) {
			$student = $this->SmsteachersModel->deleteTeacher($id);
			header("Location: ".PROOT.'admin_users/teachers');

		}

		public function edit_studentAction($id) {
			$student = $this->SmsstudentsModel->findByStuId($id);
			if (!$student) {
				header("Location: ".PROOT.'admin_users/students');

			}
			$validation = new Validate();
			if (isset($_POST['ssubmit'])) {
				$db_id = $_POST['db_id'];
			 	$column= ['stu_indexno', 'stu_fullname', 'stu_namewi', 'stu_username','stu_email', 'stu_NIC', 'stu_gender', 'stu_birthday','stu_address', 'stu_transport', 'stu_contact', 'stu_sdissices','stu_bloodgrp', 'stu_gardnerNIC', 'stu_pschool', 'stu_regday', 'stu_grade', 'stu_class', 'stu_descrip', 'stu_photo'];
			 	$posted_values = posted_values($_POST);
			 	array_shift($posted_values);
			 	array_pop($posted_values);

			 	if (!empty($posted_values)) {
				foreach ($posted_values as $key => $val) {
					$values[] = sanitize($val);
				}
				 $feilds = array_combine($column, $values);
				}

				$validation->check($_POST, Smsstudents::$addstudentValidation);

			 	if ($validation->passed()) {
			 		$newStudent = new Smsstudents();
			 		
			 		$newStudent->updateStudent($db_id, $feilds);
			 		header("Location: ".PROOT.'admin_users/students');
			 	}
			 }
			$this->view->displayErrors = $validation->displayErrors();
			$this->view->student = $student;
			$this->view->postAction = PROOT . 'admin_users' . DS . 'edit_student' . DS . $student->db_id;
			$this->view->render('admin_users/edit_student');
		}

		public function edit_teacherAction($id) {
			$teacher = $this->SmsteachersModel->findByTeacherId($id);
			if (!$teacher) {
				header("Location: ".PROOT.'admin_users/teachers');

			}
			$validation = new Validate();
			if (isset($_POST['tchsubmit'])) {
				$db_id = $_POST['db_id'];
			 	$column= ['tch_regno', 'tch_fullname', 'tch_namewi', 'tch_username', 'tch_email', 'tch_nic', 'tch_gender', 'tch_birthday', 'tch_address', 'tch_contact', 'tch_pschool', 'tch_jobstarteddate', 'tch_regday', 'tch_qualifications', 'tch_subjects', 'tch_class', 'tch_descrip', 'tch_photo'];
			 	$posted_values = posted_values($_POST);
			 	array_shift($posted_values);
			 	array_pop($posted_values);

			 	if (!empty($posted_values)) {
				foreach ($posted_values as $key => $val) {
					$values[] = sanitize($val);
				}
				 $feilds = array_combine($column, $values);
				}

				$validation->check($_POST, Smsteachers::$addTeacherValidation);

			 	if ($validation->passed()) {
			 		$newStudent = new Smsteachers();
			 		
			 		$newStudent->updateTeacher($db_id, $feilds);
			 		header("Location: ".PROOT.'admin_users/teachers');
			 	}
			 }
			$this->view->displayErrors = $validation->displayErrors();
			$this->view->teacher = $teacher;
			$this->view->postAction = PROOT . 'admin_users' . DS . 'edit_teacher' . DS . $teacher->db_id;
			$this->view->render('admin_users/edit_teacher');
		}  



	}