<?php

	class Login extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
			$this->load_model('Smsusers');
		}

		public function indexAction(){
			// echo Session::useragent_no_version();
			// echo password_hash('password', PASSWORD_DEFAULT);

			$validation = new Validate();
			if(isset($_POST['login'])) {
		 	$validation->check($_POST, [
		 		'username' => [
		 			'display' => "Username",
		 			'required' => true
		 		],
		 		'password' => [
		 			'display' => "Password",
		 			'required' => true
		 		]
		 		]);
			 	if ($validation->passed()) {
			 		$user = $this->SmsusersModel->findByUsername(($_POST['username']));
			 		//dnd($user);
			 		if ($user && password_verify(Input::get('password'), $user->password)) {
			 			$remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true : false;
			 			$user->login($remember);
			 			if ($user->usertype == 'Admin') {
			 				header("Location: ".PROOT.'admin/admin_dashbord/'.$user->db_id);
			 			}
			 			else if ($user->usertype == 'Teacher') {
			 				header("Location: ".PROOT.'teacher/teacher_dashbord/'.$user->db_id);
			 			}
			 			else if ($user->usertype == 'Student') {
			 				header("Location: ".PROOT.'student/student_dashbord/'.$user->db_id);
			 			}
			 			else if ($user->usertype == 'Parent') {
			 				header("Location: ".PROOT.'parents/parents_dashbord/'.$user->db_id);
			 			}
			 			else {
			 				$validation->addError(["There is an error with your user type, Please contact office admin"]);
			 			}
			 		}
			 		else {
			 		$validation->addError(["There is an error with your username or password"]);
			 	}
			 	}
			 	
			 }
			 $this->view->displayErrors = $validation->displayErrors();
			 $this->view->render('login/index');	
		} 

		public function logoutAction(){
			//dnd (Smsusers::currentLogedInUser());
			if (currentUser()) {
				currentUser()->logout();
			}
			header("Location: ".PROOT.'login/index');	
		} 

	}