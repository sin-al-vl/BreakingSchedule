<?php
	require '../db.php';

	$data = $_POST;

	$errors = array();

	if($data['pwd'] == '')
	{
		$errors[] = 'Enter password';
	}

	if($data['nemail'] == '')
	{
		$errors[] = 'Enter new email';
	}	

	$user = R::findOne('users', "email = ?", array($_SESSION['logged_user']->email));
	if($user && empty($errors)){

		if(password_verify($data['pwd'], $user->password)){

			$user->email = $data['nemail'];
			R::store($user);

		} else {
			$errors[] = 'Password is wrong';
		}

	} 


	if(empty($errors)){
		
		unset($_SESSION['logged_user']);
		$_SESSION['logged_user'] = $user;

		header('Location: ../UserPanel.php');

	} else {
		echo array_shift($errors);		
	}


	//trash
?>
