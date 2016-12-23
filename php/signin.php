<?php
	require '../db.php';

	$data = $_POST;

	$errors = array();
	if(trim($data['email']) == '')
	{
		$errors[] = 'Enter email';
	}

	if($data['pwd'] == '')
	{
		$errors[] = 'Enter password';
	}

	if(R::count('users', "email = ?", array($data['email'])) > 0)
	{
		$errors[] = 'User with this email is already registered';
	}	

	if(empty($errors)){
		
		$user = R::dispense('users');
		$user->email = $data['email'];
		$user->password = password_hash($data['pwd'], PASSWORD_DEFAULT);
		$user->type = 'user';
		R::store($user);

		echo json_encode(array("result"=>'true', 'message'=>'You are registered under email: '.$user->email));

	} else {

		echo json_encode(array("result"=>'false', 'message'=>array_shift($errors)));
	}