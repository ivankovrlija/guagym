<?php 
include_once("DB.class.php");
class QueryBuilder extends DB{

	public static function Select($table){
		self::setConnection();
		$sql = sprintf("select * from %s", $table);

		$result = self::getConnection()->query($sql);

		if($result->rowCount() > 0){
			while ($row = $result->fetch(PDO::FETCH_ASSOC)){
				$data[] = $row;
			}

			return $data;
		}
		else{
			echo "<h1>Something went wrong...</h1>";
		}
		self::closeConnection();
	}
	public static function Insert($table, $parameters){
		self::setConnection();
		$sql=sprintf("insert into %s (%s) values (%s)"  ,$table,implode(', ', array_keys($parameters)),
														':' . implode(', :', array_keys($parameters)));		
					try {
						$statement = self::getConnection()->prepare($sql);

						$statement->execute($parameters);
				} catch (Exception $e) {
						die($e->getMessage());
				}
				self::closeConnection();
	}

	public static function Update($table, $id, $parameters){
		self::setConnection();

    		foreach($parameters as $key=>$val) {
       		 	$cols[] = "$key = '$val'";
   			}
    		$sql = "update $table set " . implode(', ', $cols) . " WHERE id_$table=" . " :id";
 			$stmt = self::getConnection()->prepare($sql);
			$stmt->bindValue(":id", $id);
			$stmt->execute();
    	return($sql);
		self::closeConnection();
	}

	public static function Delete($table, $id){
		self::setConnection();
		$sql = 'delete from ' . $table . ' where id_' . $table . ' = :id';
		$stmt = self::getConnection()->prepare($sql);
		$stmt->bindValue(":id", $id);
		$stmt->execute();
		self::closeConnection();
	}
}




 ?>