<?php
/**
 * Controller class
 * Versão 1.0
 * @author André Nankran <andrenankran@gmail.com.br>
 */

namespace Controller;

use Model\Main;

class MainController {

	/**
   	* Requires data to model (For an AJAX request, for example)
   	* @param $state integer Unique ID
   	* @uses Main
   	* @access public
   	* @return json
  	*/
	public function filter($id)
	{
		$records = Main::filter($id);
		return json_encode($records);
	}

}
