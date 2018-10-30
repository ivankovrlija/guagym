<?php 
include_once("DB.class.php");

DB::setConnection();
$stmt = DB::getConnection()->query("SELECT * FROM user");
print_r($stmt->fetch());



 ?>