<?php

// load the $config array
require_once('mpf_config.php');

// setup the base URL
$url = $_SERVER['REQUEST_URI'];
$url = str_replace($config['path'],"",$url);

//creates an array from the rest of the URL
$array_tmp_uri = preg_split('[\\/]', $url, -1, PREG_SPLIT_NO_EMPTY);

//Here, we will define what is what in the URL
$page 	= &$array_tmp_uri[0]; //a class

if(is_null($page)){

	$display = 'home';

} else if(file_exists('pages/' . $page . '.php' )){
	
	$display = $page;
	
} else {

	$display = '404';

}

// load the page details
require_once('pages/'.$display.'.php');

// display the site
include('theme/'.$config['theme'].'/layouts/'.$config['layout'].'.php');
