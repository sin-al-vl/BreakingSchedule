<?php
	require '../db.php';

	$data = $_POST;

	$errors = array();

	if($data['opwd'] == '')
	{
		$errors[] = 'Enter old password';
	}

	if($data['npwd'] == '')
	{
		$errors[] = 'Enter new password';
	}	

	$user = R::findOne('users', "email = ?", array($_SESSION['logged_user']->email));
	if($user && empty($errors)){

		if(password_verify($data['opwd'], $user->password)){

			$user->password = password_hash($data['npwd'], PASSWORD_DEFAULT);
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
