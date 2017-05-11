<?php
session_start();

if(isset($_GET['param'])):
	$url = explode('/',$_GET['param']);
endif;

if(isset($url[0]) && $url[0] != 'ajax'):
	if(!isset($_SESSION['_token'])):
	    $_SESSION['_token'] = md5(uniqid(rand(),TRUE));
	    $_SESSION['_token_time'] = time();
	endif;
endif;

require_once 'config/general.php';
require_once 'vendor/autoload.php';

if(isset($url[0]) && $url[0] == 'ajax'):
	require_once 'public/ajaxResponse.php';
else:
	require_once 'public/index.php';
endif;
