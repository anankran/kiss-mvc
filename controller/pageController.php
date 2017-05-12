<?php
/**
 * Views controller
 * Versão 1.0
 * @author André Nankran <andrenankran@gmail.com.br>
 */

namespace Controller;

use Model\Main;

class PageController {

	/**
   	* Return view function and view file
   	* @param $page string View name
   	* @param $id integer Unique ID
  	*/
	function __construct($page,$id = null)
	{
		if(file_exists('view/'.$page.'.php')):
			if(method_exists(__CLASS__,$page)):
				$records = $this->$page($id);
			endif;
			require_once 'view/'.$page.'.php';
		else:
			require_once 'view/404.php';
		endif;
	}

	/**
   	* Return values to view
   	* @uses Main
   	* @access private
   	* @return array
  	*/
	private function main()
	{
		$return = Main::all();
		return array('results' => $return);
	}

}
