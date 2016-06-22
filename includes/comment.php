<?php

require_once(LIB_PATH.DS.'database.php');

class Comment extends databaseObject {

	protected static $table_name="comments";
	protected static $db_fields = array('id', 'photograph_id', 'created', 'author', 'body');
	public $id;
	public $photograph_id;
	public $created;
	public $author;
	public $body;


	public static function make($photo_id, $author="Anonymous", $body="") {
		if(!empty($photo_id) && !empty($author) && !empty($body)){
			$comment = new Comment();
			$comment->photograph_id = (int)$photo_id;
			$comment->created = strftime("%Y-%m-%d %H:%M:%S", time());
			$comment->author = $author;
			$comment->body = $body;
			return $comment;
		} else {
			return FALSE;
		}
	}

	public static function find_comments_on($photo_id=0){
		global $database;
		$sql  = "SELECT * FROM " . self::$table_name;
		$sql .= " WHERE photograph_id=" . $database->escape_value($photo_id);
		$sql .= " ORDER BY created ASC";
		return self::find_by_sql($sql);
	}

	public function try_to_send_notification(){
		// $mail = new PHPMailer();

	 //    $mail->IsSMTP();
	 //    $mail->Host = "smtp.gmail.com";
	 //    $mail->Port = 587;
	 //    $mail->SMTPAuth = true;
	 //    $mail->Username = "user";
	 //    $mail->Password = "password";

	 //    $mail->FromName = "Photo Gallery";
	 //    $mail->From = "dunnedave@gmail.com";
	 //    $mail->AddAddress("dunnedave@gmail.com", "Photo Gallery Admin");
	 //    $mail->Subject = "New photo gallery comment";
	 //    $mail->Body = "A new comment has been received.";

	 //    $result = $mail->Send();
	    return $result;
	}


	// Common Database Methods
	// public static function find_all() {
	// 	return self::find_by_sql("SELECT * FROM ".self::$table_name);
	// }
	
	// public static function find_by_id($id=0) {
	// 	global $database;
	// 	$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id=".$database->escape_value($id)." LIMIT 1");
	// 	return !empty($result_array) ? array_shift($result_array) : false;
	// }
	
	// public static function find_by_sql($sql="") {
	// 	global $database;
	// 	$result_set = $database->query($sql);
	// 	$object_array = array();
	// 	while ($row = $database->fetch_array($result_set)){
	// 		$object_array[] = self::instantiate($row);
	// 	}
	// 	return $object_array;
	// }

	// public static function count_all() {
	// 	global $database;
	// 	$sql = "SELECT COUNT(*) FROM ".self::$table_name;
	// 	$result_set = $database->query($sql);
	// 	$row = $database->fetch_array($result_set);
	// 	return array_shift($row);
	// }
	

	// private static function instantiate($record) {
	// 	$object = new self;
		
	// 	// $object->id 		= $record['id'];
	// 	// $object->username 	= $record['username'];
	// 	// $object->password 	= $record['password'];
	// 	// $object->first_name = $record['first_name'];
	// 	// $object->last_name 	= $record['last_name'];
		
	// 	foreach($record as $attribute=>$value){
	// 		if($object->has_attribute($attribute)){
	// 			$object->$attribute = $value;
	// 		}
	// 	}
	// 	return $object;
	// }
	
	// private function has_attribute($attribute) {
	//   $object_vars = get_object_vars($this);
	//   return array_key_exists($attribute, $object_vars);
	// }
	

	// protected function attributes(){
	// 	$attributes = array();
	// 	foreach (self::$db_fields as $field) {
	// 		if(property_exists($this, $field)) {
	// 			$attributes[$field] = $this->$field;
	// 		}
	// 	}
	// 	return $attributes;
	// }

	// protected function sanitized_attributes(){
	// 	global $database;
	// 	$clean_attributes = array();
	// 	foreach ($this->attributes() as $key => $value) {
	// 		$clean_attributes[$key] = $database->escape_value($value);
	// 	}

	// 	return $clean_attributes;
	// }


	// public function save(){
	// 	return isset($this->id) ? $this->update() : $this->create();
	// }

	// public function create()
	// {
	// 	global $database;
	// 	$attributes = $this->sanitized_attributes();

	// 	$sql  = "INSERT INTO ". self::$table_name ." (";
	// 	$sql .= join(", ", array_keys($attributes));
	// 	$sql .= ") VALUES ('";
	// 	$sql .= join("', '", array_values($attributes));
	// 	$sql .= "')";
	// 	if($database->query($sql)) {
	// 		$this->id = $database->insert_id();
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function update()
	// {
	// 	global $database;
	// 	$attributes = $this->sanitized_attributes();
	// 	$attribute_pairs = array();
	// 	foreach ($attributes as $key => $value) {
	// 		$attribute_pairs[] = "{$key}='{$value}'";
	// 	}

	// 	$sql  = "UPDATE ". self::$table_name ." SET ";
	// 	$sql .= join(", ", $attribute_pairs);
	// 	$sql .= " WHERE id=" . $database->escape_value($this->id);
	// 	$database->query($sql);
	// 	return ($database->affected_rows() == 1) ? true : false;
	// }

	// public function delete()
	// {
	// 	global $database;

	// 	$sql  = "DELETE from ". self::$table_name;
	// 	$sql .= " WHERE id=" . $database->escape_value($this->id);
	// 	$sql .= " LIMIT 1";
	// 	$database->query($sql);
	// 	return ($database->affected_rows() == 1) ? true : false;
	// }

}


?>