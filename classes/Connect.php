<?php 
ini_set('display_errors', 1);
require_once('Constructor.php');
require_once('errorHandler.php');
require_once('Database.php');
/**
 * 
 */
class Connect 
{
	private $host, $port, $database, $username, $password, $conn, $tables, $current_table;

	function __construct($host, $port, $database, $username, $password)
	{
		$this->host     = $host;
		$this->port     = $port;
		$this->database = $database;
		$this->username = $username;
		$this->password = $password;
	}

	public function connect($is_database = false)
	{
		try {
		  $conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->database", 
		  	$this->username,
		  	$this->password);
		  # set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $this->conn = $conn;
		  $this->tables = Database::getTables($conn);
		  !$is_database ? require_once('../views/database/index.php') : '';

		} catch(PDOException $e) {
		  errorHandler::$params['errors']['Connection ERROR:'] = $e->getMessage();
		  errorHandler::$debug = true;
		  errorHandler::render();
		  exit;
		}
	}

	public function getConnection(){  return $this->conn; }

	public function getCurrentTable(){ return $this->current_table; }

	public function setCurrentTable($current_table){ $this->current_table = $current_table; }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['ajax'])){ $user = Constructor::create($_POST); }

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ajax']))
{ 
	$is_database = true;
	$user = Constructor::create($_POST, $is_database);
	$columnNames = Database::getTableColumnNames($user->getConnection(), $user->getCurrentTable());
	$tableContent =  Database::getTableContent($user->getConnection(), $user->getCurrentTable());
	$response = [
		'columns' => $columnNames,
		'content' => $tableContent
	];
	echo json_encode($response);
}

 ?>