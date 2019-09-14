<?php

function connect_to_db(){
	global $db;

	require_once __DIR__ . "db.php";
	require_once __DIR__ . "/../config.php";

	if(isset($db)) {
		return;
	}

	$host 	  =	defined( 'HOST' ) ? HOST : '';
	$username =	defined( 'USERNAME' ) ? USERNAME : '';
	$password = defined( 'PASSWORD' ) ? PASSWORD : '';
	$database = defined( 'DATABASE' ) ? DATABASE : '';

	$db = new DB($host,$username,$password,$database);

}

function check_installed(){
	require_once __DIR__ . "/install.php";
	if(!is_file(__DIR__ . "/../config.php")){
		echo "This Not Installed Properly";
		install();
	}
}

function error($er){

		echo '<link rel="stylesheet" href="theme/css/error.css">';
		echo '<p class="error">'.$er.'</p>';
		
}

function root(){
		global $root;

		require_once __DIR__. "/../config.php";

		if(isset($root)){
			return;
		}

		$root = defined( 'ROOT' ) ? ROOT : '';
}

