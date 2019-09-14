<?php
/* code by Dinar Hamid */
class session{

	public $go = '';

	public $pisah;

	public function run(){

		@session_start();
		
		$this->pisah = explode('|',$this->go);

		if(@$_SESSION[md5('id_admin')]){

			 header("Location: ".@$this->pisah['0']);

		} else {

			 header("Location: ".@$this->pisah['1']);

		}
		exit;
	}
	public function login(){

		@session_start();

		if(@$_SESSION[md5('id_admin')]){
			header("Location: ".@$this->go);
		}
	}
	public function check_admin(){

		@session_start();

		if(!isset($_SESSION[md5('id_admin')])){
			header("Location: ".@$this->go);
			exit;
		}
	}

	public function out(){
		session_start();
		session_unset($_SESSION[md5('id_admin')]);
		unset($_SESSION[md5('id_admin')]);
		header("Location: login.php");
		exit;
	}
}
