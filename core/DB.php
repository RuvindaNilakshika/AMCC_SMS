<?php

	class DB {
		private static $_instance = null;
		private $_pdo, $_query, $_error = false, $_results, $_count = 0, $_lastInsertID = null; 

		private function __construct() {
			try {
			$this->_pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PSWD);
				
			} catch (PDOException $e) {
				die($e->getMessage());		
			}
		}

		public static function getInstance(){
			if (!isset(self::$_instance)) {
				self::$_instance = new DB();
			}
			return self::$_instance;
		}

		public function query($sql, $params= []) {
			$this->_error = false; 

			if ($this->_query = $this->_pdo->prepare($sql)) { 
				$x = 1;
				//is_array($params) && 
				if (count($params)) {
					foreach ($params as $param) {
						$this->_query->bindValue($x, $param);
						$x++;	
					}
				}

				if ($this->_query->execute()) {
					$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
					$this->_count = $this->_query->rowCount();
					$this->_lastInsertID = $this->_pdo->lastInsertId();
				}
				else{
					$this->_error = true;
				}
			}
			return $this;
		}


		protected function _read ($table, $params = []) {
			$conditionString = '';
			$bind = [];
			$order = '';
			$limit = '';

			// conditions
			if (isset($params['conditions'])) {
				
				if (is_array($params['conditions'])) {
					foreach ($params['conditions'] as $condition) {
						$conditionString .= ' '. $condition . ' AND';
					}
					$conditionString = trim($conditionString);
					$conditionString = rtrim($conditionString, ' AND'); // removing the last AND
				} else {
					$conditionString = $params['conditions'];
				}

				if ($conditionString != '') {
					$conditionString = ' WHERE ' . $conditionString;

			    }
				
			}
			/*if (isset($params['conditions'])) {
				if ($conditionString != '') {
					$conditionString = ' WHERE ' . $conditionString;
				

				if (is_array($params['conditions'])) {
					foreach ($params['conditions'] as $condition) {
						$conditionString .= ' '. $condition . ' AND';
					}
					$conditionString = trim($conditionString);
					$conditionString = rtrim($conditionString, ' AND'); // removing the last AND
				} else {
					$conditionString = $params['conditions'];
				}

			}
				
			} */

			// bind
			if (array_key_exists('bind', $params)) {
				$bind = $params['bind'];
			}

			// order
			if (array_key_exists('order', $params)) {
				$order = ' ORDER BY ' . $params['order'];
			}			

			// limit
			if (array_key_exists('limit', $params)) {
				$limit = ' LIMIT ' . $params['limit'];
			}

			$sql = "SELECT * FROM {$table}{$conditionString}{$order}{$limit}";

 			if ($this->query($sql, $bind)) {
 				//is_array($this->_results) && 
 				if (!count($this->_results)){
 					return false;
 				}
 				return true;
 			}

 			return false;

		}

		public function find($table, $params = []) {
			if ($this->_read($table, $params)) {
				return $this->results();
			}
			return false;
		}


		public function findFirst($table, $params = []) {
			if ($this->_read($table, $params)) {
				return $this->firstt();
			}
			return false;
		}


		public function insert($table , $feilds = []) {
			$feildString = '';
			$valueString = '';
			$values = [];

			foreach ($feilds as $feild => $value) {
				$feildString .= '`' . $feild . '`,';
				$valueString .= '?,';
				$values[] = $value;	
			}
			$feildString = rtrim($feildString, ','); // removing the last coma
			$valueString = rtrim($valueString, ','); // removing the last coma

			$sql = "INSERT INTO {$table} ({$feildString}) VALUES({$valueString})";
 			
 			if (!$this->query($sql, $values)->error()) {
 				return true;
 			}

 			return false;
		}

		public function update($table, $id, $feilds = []) {
			$feildString = '';
			$values = [];
			//if(is_array($feilds) && count($feilds)>0) {}
			foreach ($feilds as $feild => $value) {
				$feildString .= ' ' . $feild . ' = ?,';
				$values[] = $value;	
			}
			$feildString = trim($feildString);
			$feildString = rtrim($feildString, ','); // removing the last coma

			$sql = "UPDATE {$table} SET {$feildString} WHERE db_id = {$id}";

			if (!$this->query($sql, $values)->error()) {
 				return true;
 			}

 			return false;
		} 

		public function delete($table, $id) {

			$sql = "DELETE FROM {$table} WHERE db_id = {$id}";

			if (!$this->query($sql)->error()) {
 				return true;
 			}

 			return false;
		}


		public function results() {
			return $this->_results;
		}

		//get the first table
		public function firstt() {
			return (!empty($this->_results))? $this->_results[0] : [];
		}


		public function count() {
			return $this->_count;
		}

		public function lastID() {
			return $this->_lastInsertID;
		}

		public function get_columns($table) {
			return $this->query("SHOW COLUMNS FROM {$table}")->results();
		}

		public function error() {
			return $this->_error;
		}



	}
