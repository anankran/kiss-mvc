<?php
$controllerName = 'Controller\\'.ucfirst($url[1]).'Controller';
if(class_exists($controllerName)):
	$controller = new $controllerName();
	$field1 = isset($url[3])?$url[3]:null;
	$field2 = isset($url[4])?$url[4]:null;
	$method = (string)$url[2];
	if(method_exists($controller, $method) && is_callable(array($controller, $method))):
		print $controller->$method($field1,$field2);
	else:
		header('HTTP/1.0 404 Not Found');
    print '<h1>Not Found!</h1>';
	endif;
else:
	header('HTTP/1.0 404 Not Found');
	print '<h1>Not Found!</h1>';
endif;
exit;
