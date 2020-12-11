<?php

	class Parents extends Controller {

		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			$this->view->setLayout('default');
			$this->load_model('Smsusers');
			$this->load_model('Smsstudents');
			$this->load_model('Smsteachers');
			$this->load_model('Smsparents');
			$this->load_model('Smsclasses');
			$this->load_model('Smssubjects');
			$this->load_model('Smsattendance');
			$this->load_model('Sms69marks');
			$this->load_model('Sms1011marks');
			$this->load_model('Sms1213marks');
			$this->load_model('Smsexctracurricular');
		}

		public function parents_dashbordAction($id){
			$this->setId($id);
			$usern = $this->view->prnt->username;
			$prantnme = $this->SmsparentsModel->findById($usern);
			//$prantnme->pr_students
			$noOfStu = $this->SmsstudentsModel->findAllStudents();
			$this->view->noOfStu = count($noOfStu);
			$noOfTch = $this->SmsteachersModel->findAllTeachers();
			$this->view->noOfTch = count($noOfTch);
			$noOfCls = $this->SmsclassesModel->findAllClasses();
			$this->view->noOfCls = count($noOfCls);
			$noOfSub = $this->SmssubjectsModel->findAllSubjects();
			$this->view->noOfSub = count($noOfSub);

			$this->view->render('parents/parents_dashbord');	
		}

		public function view_profileAction() {
			
		} 

		public function view_resultsAction($id){
			$this->setId($id);
			$usern = $this->view->prnt->username;
			$prantnme = $this->SmsparentsModel->findById($usern);
			 $this->view->prantnme = $prantnme;
			$student = $this->SmsstudentsModel->findById($prantnme->pr_students);
			 $this->view->student = $student;

			 if ($prantnme->pr_students) {

				 	$grade = $this->SmsclassesModel->findByClass($student->stu_class);
				 	$this->view->grade = $grade;

				 	if ($this->view->grade->class_section == "6-9") {
				 		$results = $this->Sms69marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 		//dnd($results);
				 	}
				 	else if ($this->view->grade->class_section == "10-11") {
				 		$results = $this->Sms1011marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 	}
				 	else if ($this->view->grade->class_section == "12-13") {
				 		$results = $this->Sms1213marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 	}
				 	else{
				 		$results = '';
				 		$this->view->results = $results;
				 	}

				  $this->view->render('parents/view_results');
			 }
			 else {
			 		echo "<h2>There is no student with this username</h2>";
			 }
		}

		public function view_attendanceAction($id){
			 $this->setId($id);
			$usern = $this->view->prnt->username;
			$prantnme = $this->SmsparentsModel->findById($usern);
			 $this->view->prantnme = $prantnme;
			$student = $this->SmsstudentsModel->findById($prantnme->pr_students);
			 $this->view->student = $student;

			 if ($this->view->prnt->db_id) {

				 	$attendance = $this->SmsattendanceModel->findById($student->stu_indexno);
				 	$this->view->attendance = $attendance;
				 	//dnd($attendance);

				  $this->view->render('parents/view_attendance');
			 }
			 else {
			 		echo "<h2>There is no student with this username</h2>";
			 }
			 	
		}

		public function setId($id) {
			 $usertype = 'Parent';
			 $prnt = $this->SmsusersModel->findByUserId($id);
			 $this->view->prnt =  $prnt;
	    }
		

	}