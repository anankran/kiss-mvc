<?php
/**
 * Model class
 * Versão 1.0
 * @author André Nankran <andrenankran@gmail.com.br>
 */

namespace Model;

class Main extends Database {

  	/**
   	* Search all results
   	* @uses Database
   	* @access public
   	* @return obj
  	*/
	public static function all()
	{
		$sql = 'SELECT * FROM main';
    		$records = Database::select($sql);
    		return $records;
	}

	/**
   	* Filtered search
   	* @param $state integer Unique ID
   	* @uses Database
   	* @access public
   	* @return obj
 	 */
	public static function filter($id)
	{
		$sql = 'SELECT * FROM main WHERE field = ?';
		Database::setFields(array($id));
   		$records = Database::select($sql);
    		return $records;
	}

}
