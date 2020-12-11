<?php 
 class Smsusers extends Model {
 	private $_isLoggedIn, $_sessionName, $_cookieName;
 	public static $currentLoggedInUser = null;

 	public function __construct($user = '') {
 		$table = 'sms_users';
 		parent::__construct($table);
 		$this->_sessionName = CURRENT_USER_SESSION_NAME;
 		$this->_cookieName = REMEMBR_ME_COOKIE_NAME;
 		$this->_softDelete = true;
 		if ($user != '') {
 			if (is_int($user)) {
 				$u = $this->_db->findFirst('sms_users',['conditions'=>['db_id = ?'], 'bind'=>[$user]]);
 			} else {
 				$u = $this->_db->findFirst('sms_users',['conditions'=>['username = ?'], 'bind'=>[$user]]);
 			}
 			if ($u) {
 				foreach ($u as $key => $val) {
 					$this->key = $val;
 				}
 			}
 		}
 	}

 	public function findAllUsers($params = []) {
 		$conditions = [
		];
		$conditions = array_merge($conditions, $params);
		$users = $this->find($conditions);
		array_shift($users);
		return $users;
 	}

 	public function findByUsername($username) {
 		return $this->findFirst(['conditions' =>"username= ?",'bind' => [$username]]);
 	}

 	public function findById($id ) {
 		return $this->find(['conditions' =>"db_id= ?", 'bind' => [$id]]);
 	}

 	public function findByUserId($id ) {
 		return $this->findFirst(['conditions' =>"db_id= ?", 'bind' => [$id]]);
 	}

 	public static function currentLogedInUser() {
 		if (!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
 			$u = new Smsusers((int)Session::get(CURRENT_USER_SESSION_NAME));
 			self::$currentLoggedInUser = $u;
 		}
 		return self::$currentLoggedInUser;
 	}


 	public function login($rememberMe = false) {
 		Session::set($this->_sessionName, $this->id);
 		if ($rememberMe) {
 			$hash = md5(uniqid() + rand(0,100));
 			$user_agent = Session::useragent_no_version();
 			Cookie::set($this->_cookieName, $hash, REMEMBR_ME_COOKIE_EXPIRY);
 			$fields = ['session'=>$hash, 'user_agent'=>$user_agent, 'user_id'=>$this->id];
 			$this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
 			$this->_db->insert('sms_user_sessions', $fields);
 		}
 	}

 	public function logout() {
 		$user_agent = Session::useragent_no_version();
 		$this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
 		Session::delete(CURRENT_USER_SESSION_NAME);
 		if (Cookie::exists(REMEMBR_ME_COOKIE_NAME)) {
 			Cookie::delete(REMEMBR_ME_COOKIE_NAME);
 		}
 		self::$currentLoggedInUser = null;
 		return true;
 	}

 	public function regNewUser($params) {
 		$this->insert($params);
 	}
 }