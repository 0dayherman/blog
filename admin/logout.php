<?php
session_start();
	require_once __DIR__ . "/session.php";

		$ses = new session;
		$ses->go = "login.php";
	if(!$ses->check_admin()){
		$ses->out();
	}
	
