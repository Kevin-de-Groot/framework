<?php

class User
{
	public $id;
	public $username;
	public $password;

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setPassword($password)
	{
		$this->password = sha1($password);
	}
}