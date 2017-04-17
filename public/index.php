<?php
if(isset($url[0]) && $url[0] !== ''):
	$page = $url[0];
else:
	$page = 'home';
endif;

$id = isset($url[1]) ? $url[1] : null;
use Controller\PageController as PageController;
$controller = new PageController($page,$id);
