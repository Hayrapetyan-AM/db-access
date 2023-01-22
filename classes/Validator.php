<?php 
require_once('errorHandler.php');
/**
 * 
 */
class Validator
{
	public static $isRequired = ' is required!';

	public static function secure($data)
	{
		foreach ($data as $key => $value) {
			$value = trim($value);
	    	$value = stripslashes($value);
	    	$value = htmlspecialchars($value);
		}
	    return $data;
	}

	public static function isRequired($data)
	{
		foreach ($data as $key => $value) {
			if($key == 'password') { continue; }
			if(empty($value)){  errorHandler::$params['errors'][$key] = self::$isRequired; }
		}

		if (isset(errorHandler::$params['errors'])) {
			errorHandler::$debug = true;
			errorHandler::render();
			exit;
		}else{ return $data; }
	}
}
 ?>