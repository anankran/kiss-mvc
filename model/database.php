<?php
/**
 * Database class
 * Versão 1.0
 * @author André Nankran <andrenankran@gmail.com.br>
 */

namespace Model;

use PDO;

class Database {

	private static $filters;

	/**
   	* Return filters values
   	* @access protected
  	 * @return array
  	*/
 	 protected static function getFilters()
	{
		return self::$filters;
  	}

	/**
   	* Receive filters values
   	* @access protected
  	*/
  	protected static function setFilters($filters)
	{
  		self::$filters = $filters;
	}

	/**
   	* Connect to MySQL database using PDO
   	* @uses PDO
   	* @access private
   	* @return obj
  	*/
	private static function conn()
	{
		$host = 'HOST';
		$db = 'DBNAME';
		$username = 'USERNAME';
		$password = 'PASSWORD';
		$pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}

	/**
     	* SELECT statement function
     	* @param $sql string SQL query
     	* @access public
     	* @return obj
    	*/
	protected static function select($sql)
	{
		$filter = self::$filters;
		$conn = self::conn();
		$query = $conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$query->execute($filter);
		$result = $query->fetchAll();
		return $result;
	}

}
