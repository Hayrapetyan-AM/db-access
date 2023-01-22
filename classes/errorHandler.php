<?php 
/**
 * 
 */
class errorHandler 
{
	const BAD_REQUEST = 400;
	public static $debug = false;
	public static $params;
	
	public static function render()
	{
		require_once('../views/error.php');
	}
}
 ?>