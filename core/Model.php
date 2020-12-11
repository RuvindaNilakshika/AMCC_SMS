<?php 
	class Model {
		protected $_db, $_table, $_modelName, $_softDelete = false, $_columnNames = [];
		public $id;

		public function __construct($table){
			$this->_db = DB::getInstance();
			$this->_table = $table;
			$this->_setTableColumns();
			$this->_modelName = str_replace(' ','', ucwords(str_replace('_','', $this->_table)));
		} 

		protected function _setTableColumns() {
			$columns = $this->get_columns();
			foreach ($columns as $column) {
				$columnName = $column->Field;
				$_columnNames[] = $columnName;
			}
		}

		public function get_columns() {
			return $this->_db->get_columns($this->_table);
		}

		public function get_rows() {
			return count($this->_table);
		}

		public function find($params = []) {
			$results = [];
			$resultsQuery = $this->_db->find($this->_table, $params);
			if (!$resultsQuery) {
				return [];
			}
			foreach ($resultsQuery as $result) {
				$obj = new $this->_modelName($this->_table);
				$obj->_populateObjectData($result);
				$results[] = $obj;
			}
			return $results;
		}

		public function findFirst($params = []) {
			$resultsQuery = $this->_db->findFirst($this->_table, $params);
			$result = new $this->_modelName($this->_table);
			if ($resultsQuery) {
				$result->_populateObjectData($resultsQuery);
			}
			return $result;
		}

		public function findById($id) {
			return $this->findFirst(['conditions' =>"db_id= ?",'bind' => [$id]]);
		}

		public function assignd($params) {
			if (!empty($params)) {
				foreach ($params as $key => $val) {
					if (in_array($key, $this->_columnNames)) {
						$this->$key = sanitize($val);
					}
				}
				return true;
			}
			return false;
		}

		public function combine($params) {
			if (!empty($params)) {
				foreach ($params as $key => $val) {
					$values[] = sanitize($val);
				}
				return array_combine($this->_columnNames, $values);
			}
			return false;
		}



		public function save() {
			$feilds = [];
			foreach ($this->_columnNames as $column) {
				$feilds[$column] = $this->column;
			}
			// determoine whether to update or insert
			if (property_exists($this, 'id') && $this->id != '') {
				return $this->update($this->id, $fields);
			}
			else {
				return $this->insert($fields);
			}
			
		}

		public function insert($fields) {
			if (empty($fields)) {
				return false;
			}
			return $this->_db->insert($this->_table, $fields);
		}

		public function update($id, $fields) {
			if (empty($fields) || $id == '') {
				return false;
			}
			return $this->_db->update($this->_table, $id, $fields);
		}

		public function delete($id = '') {
			if ($id == '' || $this->id == '') {
				return false;
			}
			$id = ($id == '')? $this->id : $id;
			if ($this->_softDelete) {
				return $this->_db->update($id, ['deleted' => 1]);
			}
			return $this->_db->delete($this->_table, $id);
		}

		public function query($sql, $bind = []) {
			return $this->_db->query($sql, $bind);
		}

		public function data() {
			$data = new stdClass();
			foreach ($this->_columnNames as $column) {
				$data->$column = $this->column;
			}
			return $data;
		}

		protected function _populateObjectData($result) {
			foreach ($result as $key => $val) {
				$this->$key = $val;
			}
		}

	} 