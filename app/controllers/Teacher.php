<?php

	class Teacher extends Controller {

		protected $_tchId;
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
			$this->load_model('Smsexams');
		}

		public function teacher_dashbordAction($id){
			$this->setId($id);
			$noOfStu = $this->SmsstudentsModel->findAllStudents();
			$this->view->noOfStu = count($noOfStu);
			$noOfTch = $this->SmsteachersModel->findAllTeachers();
			$this->view->noOfTch = count($noOfTch);
			$noOfCls = $this->SmsclassesModel->findAllClasses();
			$this->view->noOfCls = count($noOfCls);
			$noOfSub = $this->SmssubjectsModel->findAllSubjects();
			$this->view->noOfSub = count($noOfSub);
			
			$this->view->render('teacher/teacher_dashbord');	
		}

		public function setId($id) {
			 $usertype = 'Teacher';
			 $teacher = $this->SmsusersModel->findById($id);
			 $this->view->teacher =  $teacher;
	    }

	    public function all_studentsAction($id){
			 $this->setId($id);
			 foreach ($this->view->teacher as $tch) {
			 $classtchr = $this->SmsteachersModel->findByusername($tch->username);
			 $this->view->classtchr =  $classtchr;
			}
			$students = $this->SmsstudentsModel->findByclass($this->view->classtchr->tch_class);
			$this->view->students =  $students;


			 $this->view->render('teacher/all_students');	
		}

		public function mark_selectAction($id){
			 $this->setId($id);
			 $this->view->render('teacher/mark_select');	
		} 

		public function mark_attendanceAction(){
			 if (isset($_POST['csubmit'])) {
			 	$date = $_POST['date'];
			 	$this->setId($_POST['id']);
			 	$this->view->date =  $date;
			 	foreach ($this->view->teacher as $tch) {
			 		$classtchr = $this->SmsteachersModel->findByusername($tch->username);
			 		$this->view->classtchr =  $classtchr;
			 		$tchid = $tch->db_id;
			 		$this->view->tchid =  $tchid;
			 		//dnd($this->view->classtchr->tch_class);
			 	}
			 	$students = $this->SmsstudentsModel->findByclass($this->view->classtchr->tch_class);
			 	$this->view->students =  $students;
			 	//dnd($this->view->students);
			 }

			 if (isset($_POST['atdsave'])) {
			 	//dnd($_POST);
			 	$day = $_POST['date'];
			 	$class = $_POST['class'];
			 	$tchid = $_POST['tid'];
			 	array_shift($_POST);
			 	array_shift($_POST);
			 	array_shift($_POST);
			 	array_pop($_POST);
			 	$arr = array_chunk($_POST,3);
			 	$params = '';
			 	foreach ($arr as $a) {
			 			$params .= '('. '`'.$class . '`'.','.'`'.$day.'`'.','.'`'.$a[0].'`'.','.'`'.$a[1].'`'.','.'`'.$a[2].'`'.'),';

			 	} 
			 	$params = rtrim($params, ',');
				dnd($params);

			 $feilds = "class_id, date, student_id, student_name, status";
			 if ($params) {
			 		//$sql = "INSERT INTO 'sms_attendance' ({$feilds}) VALUES({$params})";
			 		//dnd($sql);
			 		$newattendance = new Smsattendance();
			 		$newattendance->addattendance($feilds, $params);
			 		header("Location: ".PROOT.'teacher/teacher_dashbord/'. $tchid);	
			 	}
			 }
			 $this->view->render('teacher/mark_attendance');	
		} 

		public function select_dateAction($id){
			 $this->setId($id);
			 $this->view->render('teacher/select_date');	
		} 

		public function view_attendanceAction(){
			 if (isset($_POST['datesubmit'])) {
			 	$this->setId($_POST['id']);
			 	$date = $_POST['date'];
			  	foreach ($this->view->teacher as $tch) {
			 		$classtchr = $this->SmsteachersModel->findByusername($tch->username);
			 		$this->view->classtchr =  $classtchr;
			 	}
			 	$classid = $this->view->classtchr->tch_class;

			 	$students_list = $this->SmsattendanceModel->findByDate($date, $classid);
			 	$this->view->students_list =  $students_list;
			 	//dnd($students_list);

			 	$this->view->render('teacher/view_attendance');
			 }
			 else {
			 	echo "error";
			 }	
		}

		public function add_marksAction($id){
			$this->setId($id);
			$validation = new Validate();
			$this->view->displayErrors = $validation->displayErrors();
			foreach ($this->view->teacher as $tch) {
				$classtchr = $this->SmsteachersModel->findByusername($tch->username);
			 	$this->view->classtchr =  $classtchr;
			 	$tchid = $tch->db_id;
			 	$this->view->tchid =  $tchid;
			}
			$class_sec = $this->SmsclassesModel->findByclass($this->view->classtchr->tch_class);
			$this->view->class_sec =  $class_sec;

			$grade = $this->view->class_sec->grade;
			$exams = $this->SmsexamsModel->findBygrade($grade);
			$this->view->exams =  $exams;



				if ($this->view->class_sec->class_section == '6-9') {
					$this->view->render('teacher/add_6_9_marks');
				}
				else if ($this->view->class_sec->class_section == '10-11') {
					$this->view->render('teacher/add_10_11_marks');
				}
				else if ($this->view->class_sec->class_section == '12-13') {
					$this->view->render('teacher/add_12_13_marks');
				}
				else {
					echo "There is a error with your class id, please contact the office admin";
				}
			 
		}

		public function save_6_9_resultsAction(){
			 if (isset($_POST['marksubmit'])) {
			 	$tchid = $_POST['tid'];
			 	$posted_values = posted_values($_POST);
			 	$column= ['exam_id', 'class', 'student_id', 'sinhala', 'english', 'religion', 'mathematics', 'science', 'history', 'geography', 'life_skills', 'aesthetic', 'health', 'second_language','total','average'];
			 	array_pop($posted_values);
			 	array_shift($posted_values);

			 	$posted_array = $posted_values;
			 	//dnd($posted_array);
			 	array_shift($posted_values);
			 	array_shift($posted_values);
			 	array_shift($posted_values);

			 	$total = array_sum($posted_values);
			 	$average = $total/count($posted_values);
			 	$average = round($average,2);

			 	array_push($posted_array, $total,$average);
			 	//dnd($posted_array);



			 	if (!empty($posted_array)) {
				foreach ($posted_array as $key => $val) {
					$values[] = sanitize($val);
				}
				 $feilds = array_combine($column, $values);
				}
				dnd($feilds);

			 	if ($feilds) {
			 		$newMarks = new Sms69marks();
			 		$newMarks->addmarks($feilds);
			 		//dnd($newStudent);
			 		//$newUser->login();
			 		header("Location: ".PROOT.'teacher/exam_select/'.$tchid);
			 	}	
			 }

			 else{
			 	echo "There is a error with your post request";
			 }
		}

		public function save_10_11_resultsAction(){

			 //$this->view->render('teacher/view_results');	
		}

		public function save_12_13_resultsAction(){

			 //$this->view->render('teacher/view_results');	
		}

		public function exam_selectAction($id){
			$this->setId($id);
			foreach ($this->view->teacher as $tch) {
				$classtchr = $this->SmsteachersModel->findByusername($tch->username);
			 	$this->view->classtchr =  $classtchr;
			}
			$class_sec = $this->SmsclassesModel->findByclass($this->view->classtchr->tch_class);
			$this->view->class_sec =  $class_sec;
			//dnd($class_sec->grade);
			$grade = $this->view->class_sec->grade;
			$exams = $this->SmsexamsModel->findBygrade($grade);
			$this->view->exams =  $exams;
			//dnd($exams);

			$this->view->render('teacher/exam_select');
		}


		public function view_resultsAction(){
			if (isset($_POST['exsubmit'])) {
			 //dnd($_POST);
			 $this->setId($_POST['id']);
			 $exam = $_POST['exam_id'];

			 foreach ($this->view->teacher as $tch) {
			 	$classtchr = $this->SmsteachersModel->findByusername($tch->username);
			 	$this->view->classtchr =  $classtchr;
			 }
			 $class_sec = $this->SmsclassesModel->findByclass($this->view->classtchr->tch_class);
			 $this->view->class_sec =  $class_sec;

			 if ($this->view->class_sec->class_section == '6-9') {
			 		$student69 = $this->Sms69marksModel->findByclass($this->view->classtchr->tch_class, $exam ,['order'=>'total']);
			 		$this->view->student69 =  $student69;
			 		//foreach ($this->view->student69  as $key => $value) {
			 			//$place = $this->$key;
			 			//dnd($place);
			 		//}
			 		//dnd($student69);
					$this->view->render('teacher/view_6_9_marks');
				}
				else if ($this->view->class_sec->class_section == '10-11') {
					$student1011 = $this->Sms1011marksModel->findByclass($this->view->classtchr->tch_class, $exam ,['order'=>'total']);
			 		$this->view->student1011 =  $student1011;
					$this->view->render('teacher/view_10_11_marks');
				}
				else if ($this->view->class_sec->class_section == '12-13') {
					$student1213 = $this->Sms1213marksModel->findByclass($this->view->classtchr->tch_class, $exam ,['order'=>'total']);
			 		$this->view->student1213 =  $student1213;
					$this->view->render('teacher/view_12_13_marks');
				}
				else {
					echo "There is a error with your class id, please contact the office admin";
				}
			}	
		}

		public function select_toaddAction($id){
			$this->setId($id);
			$this->view->render('teacher/select_toadd');
		}

		public function select_toeditAction($id){
			$this->setId($id);
			$this->view->render('teacher/select_toedit');
		}

		public function add_extracurricularAction(){
			if (isset($_POST['addstsubmit'])) {
				$this->setId($_POST['id']);
				$this->view->render('teacher/add_extracurricular');
				
			}
			
		}

		public function edit_extracurricularAction(){
			if (isset($_POST['addstsubmit'])) {
				$this->setId($_POST['id']);
				if (!$_POST) {
					# code...
				}
				else {
					$this->view->render('teacher/edit_extracurricular');
				}
			}
			
		}

		public function select_stuIdAction($id){
			 $this->setId($id);
			 $this->view->render('teacher/select_stuId');	
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

				 	$teach = $this->SmsteachersModel->findByClass($student->stu_class);
				 	$this->view->teach = $teach;
				 	//dnd($teach);

				 	$parentis = $this->SmsparentsModel->findByStuId($student->stu_username);
				 	$this->view->parentis = $parentis;

				 	$extracurricular = $this->SmsexctracurricularModel->findByStuId($student->stu_username);
				 	$this->view->extracurricular = $extracurricular;

				 	$attendance = $this->SmsattendanceModel->findById($student->stu_indexno);
				 	$this->view->attendance = $attendance;
				 	//dnd($attendance);
				 	if ($this->view->grade->class_section == "6-9") {
						$this->setId($_POST['id']);
				 		$results = $this->Sms69marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 		//dnd($results);
				 		$this->view->render('teacher/view_69student');
				 	}
				 	else if ($this->view->grade->class_section == "10-11") {
						$this->setId($_POST['id']);
				 		$results = $this->Sms1011marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 		$this->view->render('teacher/view_1011student');
				 	}
				 	else if ($this->view->grade->class_section == "12-13") {
				 		$this->setId($_POST['id']);
				 		$results = $this->Sms1213marksModel->findById($student->stu_indexno);
				 		$this->view->results = $results;
				 		$this->view->render('teacher/view_1213student');
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