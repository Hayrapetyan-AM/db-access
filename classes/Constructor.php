<?php 
require_once('Connect.php');
require_once('Validator.php');
/**
 * 
 */
class Constructor
{

	public static function create($data, $is_database = false)
	{
		$data = Validator::isRequired($data);
		$data = Validator::secure($data);
		extract($data);
		$user = new Connect($host, $port, $database, $username, $password);
		if (isset($tableName)){ $user->setCurrentTable($tableName); }
		$user->connect($is_database);
		return $user;	 
	}

}
 ?>