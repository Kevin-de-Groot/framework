<?php

function __autoload($classname)
{
	$classfile = 'classes/'. strtolower($classname) .'.class.php';

	if (is_file($classfile))
	{
		require $classfile;
	}
}

$user = new User();

$user->setUsername('Kevin de groot');

$user->setEmail('fakemail');

echo $user->getUsername();