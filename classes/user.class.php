<?php

class User
{
	protected $id;
	protected $username;
	protected $password;
	protected $email;

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

	public function getPassword()
	{
		return $this->password;
	}

	public function setEmail($email)
	{
		if (filter_var($email, FILTER_SANITIZE_EMAIL) === false)
		{
			trigger_error('Invalid email', E_USER_NOTICE);
		}

		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}
}