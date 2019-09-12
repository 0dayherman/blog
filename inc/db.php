<?php
class DB{

	/**
 	*	@author Dinar Hamid
 	*   	@version 1.0
 	*	@license MIT
 	*	https://opensource.org/licenses/MIT
 	*/

	public $host = '';

	public $user = '';

	public $password = '';

	public $dbname = '';

	public $db;

	public function __construct($host,$user,$password,$dbname){

		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->dbname = $dbname;
		$this->db = new mysqli($this->host,$this->user,$this->password,$this->dbname);

 	}

	public function articles($id){

		$prepare = $this->db->prepare("SELECT * FROM news WHERE id = ?");

		$prepare->bind_param("s", $id);

		$prepare->execute();

		$result = $prepare->get_result();

		while($tampil = $result->fetch_row()){
			return $tampil;
		}
		$prepare->close();
		$this->db->close();

  	}

  public function cari($search){

  		$prepare = $this->db->prepare("SELECT * FROM news WHERE title LIKE ?");

  		$prepare->bind_param("s", $search);

  		$prepare->execute();

  		$title = $prepare->get_result();

  		while($result=$title->fetch_row()){
  			return $result;
  		}
  		$prepare->close();

  		$this->db->close();
  	}

  public function login($username,$password){

  		$prepare = $this->db->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");

  		$prepare->bind_param("ss",$username,$password);

  		$prepare->execute();

  		$result = $prepare->get_result();

  		while($pecah=$result->fetch_row()){
  			if($username == $pecah['3'] AND $password == $pecah['4']){
  				return $pecah;
  			} else {
  				return "ERROR";
  			}
  		}

  		$prepare->close();

  		$this->db->close();
  	}

}
