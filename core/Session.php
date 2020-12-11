<?php
	class Session {
		public static function exists($name) {
			return (isset($_SESSION[$name])) ? true : false;
		}

		public static function get($name) {
			return $_SESSION[$name];
		}

		public static function set($name, $value) {
			return $_SESSION[$name] = $value;
		}

		public static function delete($name) {
			if(self::exists($name)) {
				unset($_SESSION[$name]);
			}
		}

		public static function useragent_no_version() {
			$userAgent = $_SERVER['HTTP_USER_AGENT'];
			$regx = '/\/[a-zA-Z0-9.]+/';
			$newString = preg_replace($regx, '', $userAgent);
			return $newString;
		}
	}