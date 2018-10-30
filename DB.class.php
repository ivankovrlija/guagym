<?php 
include_once("utill.php");

class DB{
	private static $connection;

	public function setConnection(){	
		try {
	    self::$connection= new PDO('mysql:host=localhost;dbname=gym', DB_USER, DB_PASS);
	    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    echo 'Connection failed: ' . $e->getMessage();
}
	}
	public function getConnection(){
		return self::$connection;
	}
	public function closeConnection(){
		self::$connection= null;
	}
}
 ?>