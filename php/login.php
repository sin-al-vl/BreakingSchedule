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

	$user = R::findOne('users', "email = ?", array($data['email']));
	if($user){

		if(password_verify($data['pwd'], $user->password)){

			$_SESSION['logged_user'] = $user;

		} else {
			$errors[] = 'Password is wrong';
		}

	} else {
		$errors[] = 'There is no registered user with this email';	
	}


	if(empty($errors)){
		echo json_encode(array("result"=>'true', 'message'=>$_SESSION['logged_user']->email, 'type'=>$_SESSION['logged_user']->type));

	} else {

		echo json_encode(array("result"=>'false', 'message'=>array_shift($errors)));		
	}
?>
