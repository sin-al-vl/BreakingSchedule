<?php
	require '../db.php';

	$data = $_POST;

	$user = R::findOne('users', "id = ?", array($data['id']));
	
	if(trim($data['id']) != '' && trim($data['id']) != $user->id)
	{
		$user->id = $data['id'];
	}

	if(trim($data['email']) != '' && trim($data['email']) != $user->email)
	{
		$user->email = $data['email'];
	}

	if($data['pwd'] != '')
	{
		$user->password = password_hash($data['pwd'], PASSWORD_DEFAULT);
	}

	if(trim($data['type']) != '' && trim($data['type']) != $user->type)
	{
		$user->type = $data['type'];
	}

	R::store($user);

	header('Location: ../AdminUsers.php');