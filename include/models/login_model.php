<?php

class Login_model extends Model {

	public function run(){
		$login = $_POST['login'];
		$password = $_POST['password'];
		$this->db->prepare("SELECT id FROM users WHERE login='$login' AND password='$password'");
		
		$this->db->execute(array(
		':login'=>$login,
		':password'=>$password
		));
		
		$data = fetchAll();
		print_r($data);
	}

}