<?php
if(isset($url[1])):
	if(isset($url[2])):
		$controllerName = 'Controller\\'.ucfirst($url[1]).'Controller';
		$controller = new $controllerName();
		$field1 = isset($url[3])?$url[3]:null;
		$field2 = isset($url[4])?$url[4]:null;
		print $controller->$url[2]($field1,$field2);
		exit;
	else:
		exit('ERROR!');
	endif;
else:
	exit('ERROR!');
endif;
