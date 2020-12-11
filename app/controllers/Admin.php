<?php

	class Admin extends Controller {

		public $_dbid;

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

		public function admin_dashbordAction(){

			 $noOfStu = $this->SmsstudentsModel->findAllStudents();
			 $this->view->noOfStu = count($noOfStu);
			 $noOfTch = $this->SmsteachersModel->findAllTeachers();
			 $this->view->noOfTch = count($noOfTch);
			 $noOfCls = $this->SmsclassesModel->findAllClasses();
			 $this->view->noOfCls = count($noOfCls);
			 $noOfSub = $this->SmssubjectsModel->findAllSubjects();
			 $this->view->noOfSub = count($noOfSub);

			 $this->view->render('admin/admin_dashbord');	
		} 

		public function select_stuIdAction(){
			 $this->view->render('admin/select_stuId');	
		} 

		public function select_tchIdAction(){
			 $this->view->render('admin/select_tchId');	
		} 

		public function select_prntIdAction(){
			 $this->view->render('admin/select_prntId');	
		} 

		public function view_studentAction() {
			if (isset($_POST['stusubmit'])) {
				$id = $_POST['stuId'];
			 	$student = $this->SmsstudentsModel->findById($id);
			 	$this->view->student = $student;

			 	if ($this->view->student->stu_indexno) {
				 	$classid = $student->stu_class;
				 	$grade = $this->SmsclassesModel->findByClass($student->stu_class);
				 	$this->view->grade = $grade;

				 	$teacher = $this->SmsteachersModel->findByClass($student->stu_class);
				 	$this->view->teacher = $teacher;

				 	$parentis = $this->SmsparentsModel->findByStuId($student->stu_username);
				 	$this->view->parentis = $parentis;

				 	$extracurricular = $this->SmsexctracurricularModel->findByStuId($student->stu_username);
				 	$this->view->extracurricular = $extracurricular;

				 	$attendance = $this->SmsattendanceModel->findById($student->stu_indexno);
				 	$this->view->attendance = $attendance;
				 	//dnd($attendance);
				 	if ($this->view->grade->class_section == "6-9") {
				 		$results = $this->Sms69marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 		//dnd($results);
				 		$this->view->render('admin/view_69student');
				 	}
				 	else if ($this->view->grade->class_section == "10-11") {
				 		$results = $this->Sms1011marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 		$this->view->render('admin/view_1011student');
				 	}
				 	else if ($this->view->grade->class_section == "12-13") {
				 		$results = $this->Sms1213marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 		$this->view->render('admin/view_1213student');
				 	}
				 	else{
				 		$results = '';
				 		$this->view->results = $results;
				 	}
				 }
			 	else {
			 		echo "<h2>There is no student with this username</h2>";
			 	}

			}

		}
		

	}