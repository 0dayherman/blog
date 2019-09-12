<?php
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
	}
	public function login(){

		@session_start();

		if(@$_SESSION[md5('id_admin')]){
			header("Location: ".@$this->go);
		}
	}
}
