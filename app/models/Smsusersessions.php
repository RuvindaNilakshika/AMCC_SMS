<?php 
 class Smsstudents extends Model {

 	public function __construct() {
 		$table = 'sms_user_sessions';
 		parent::__construct($table);

 	}

 	public function getFromCookie() {
 		if(COOKIE::exists(REMEMBR_ME_COOKIE_NAME)) {
 			$userSession = new self();
 			$userSession = $userSession->findFirst([
 			'conditions' => ["user_agent= ? AND session= ?"],
			'bind' => [Session::uagent_no_version(), COOKIE::get(REMEMBR_ME_COOKIE_NAME)]
 			]);
 		}
 		if(!$userSession) return false;
 		return $userSession;
 	}
 }