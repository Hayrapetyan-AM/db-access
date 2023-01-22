<?php 
/**
 * 
 */
class Database
{
	
	public static function getTables($conn)
	{
		$sql = 'SHOW TABLES';
	    $query = $conn->query($sql);
	    return $query->fetchAll(PDO::FETCH_COLUMN);
	}

	public static function getTableColumnNames($conn, $table)
	{
		$query = $conn->prepare("DESCRIBE $table");
	    $query->execute();
	    return $query->fetchAll(PDO::FETCH_COLUMN);
	}

	public static function getTableContent($conn, $table)
	{
		$query = $conn->prepare("SELECT * FROM $table");
	    $query->execute();
	    return $query->fetchAll(PDO::FETCH_OBJ);
	}
}

 ?>