<?php 
include_once("QueryBuilder.php");


/*DB::setConnection();
$stmt = DB::getConnection()->query("SELECT * FROM appointment");
print_r($stmt->fetchall());*/

/*$result=QueryBuilder::Select('appointment');
print_r($result[0]['appointments_time']);*/


/*$params= [
			'name' => 'Ivan',
			'lastname' => 'Kovrlija',
			'username' => 'anivia',
			'email' => 'kovrlijaivan@gmail.com',
			'password' => 'anivia',
			'last_log' => date('Y-m-d H:i:s'),
			'id_gender' => 1
		];
		
$result= QueryBuilder::Insert("user",$params);*/
$params=['name' => 'Aleksandar'];
$result=QueryBuilder::Update('user', 1 , $params);


 ?>