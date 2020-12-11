<?php

	class Student extends Controller {

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

		public function student_dashbordAction($id){
			 $this->setId($id);
			 //dnd($this->view->student->db_id);
			 $usern = $this->view->stu->username;
			 $student = $this->SmsstudentsModel->findById($usern);
			 $this->view->student = $student;
			 //dnd($this->view->student);
			 $noOfStu = $this->SmsstudentsModel->findAllStudents();
			 $this->view->noOfStu = count($noOfStu);
			 $noOfTch = $this->SmsteachersModel->findAllTeachers();
			 $this->view->noOfTch = count($noOfTch);
			 $noOfCls = $this->SmsclassesModel->findAllClasses();
			 $this->view->noOfCls = count($noOfCls);
			 $noOfSub = $this->SmssubjectsModel->findAllSubjects();
			 $this->view->noOfSub = count($noOfSub);

			 $this->view->render('student/student_dashbord');	
		}

		public function setId($id) {
			 $usertype = 'Student';
			 $stu = $this->SmsusersModel->findByUserId($id);
			 $this->view->stu =  $stu;
	    }

	    public function view_resultsAction($id){
			 $this->setId($id);
			 $usern = $this->view->stu->username;
			 $student = $this->SmsstudentsModel->findById($usern);
			 $this->view->student = $student;

			 if ($student->stu_indexno) {

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

				  $this->view->render('student/view_results');
			 }
			 else {
			 		echo "<h2>There is no student with this username</h2>";
			 }
		}

		public function view_attendanceAction($id){
			 $this->setId($id);
			 $usern = $this->view->stu->username;
		 	 $student = $this->SmsstudentsModel->findById($usern);
		 	 $this->view->student = $student;

			 if ($this->view->stu->db_id) {

				 	$attendance = $this->SmsattendanceModel->findById($student->stu_indexno);
				 	$this->view->attendance = $attendance;
				 	//dnd($attendance);

				  $this->view->render('student/view_attendance');
			 }
			 else {
			 		echo "<h2>There is no student with this username</h2>";
			 }
			 	
		}

		public function view_extracurricularAction($id){
			 $this->setId($id);
			 $usern = $this->view->stu->username;
			 $student = $this->SmsstudentsModel->findById($usern);
			 $this->view->student = $student;

			 if ($this->view->stu->db_id) {

				 	$extracurricular = $this->SmsexctracurricularModel->findByStuId($student->stu_username);
				 	$this->view->extracurricular = $extracurricular;
				 	
				  $this->view->render('student/view_extracurricular');
			 }
			 else {
			 		echo "<h2>There is no student with this username</h2>";
			 }
			 	
		}

		public function view_profileAction($id) {
			 $this->setId($id);
			 $usern = $this->view->stu->username;
			 $student = $this->SmsstudentsModel->findById($usern);
			 $this->view->student = $student;

			 if ($student->stu_indexno) {

			 	if ($this->view->student->stu_indexno) {
				 	$classid = $student->stu_class;
				 	$grade = $this->SmsclassesModel->findByClass($student->stu_class);
				 	$this->view->grade = $grade;

				 	$teacher = $this->SmsteachersModel->findByClass($student->stu_class);
				 	$this->view->teacher = $teacher;

				 	$parentis = $this->SmsparentsModel->findByStuId($student->stu_username);
				 	$this->view->parentis = $parentis;

				 }
				  $this->view->render('student/view_profile');
			 }
			 else {
			 		echo "<h2>There is no student with this username</h2>";
			 }
		}

		


		

	}