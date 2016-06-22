<?php

require_once(LIB_PATH.DS.'database.php');

class Gallery extends DatabaseObject {
	protected static $table_name="galleries";
	protected static $db_fields=array('id', 'name');
	public $id;
	public $name;


	public function save() {
		if(isset($this->id)) {
			$this->update();
		} else {
			$this->create();
		}
	}


}
?>