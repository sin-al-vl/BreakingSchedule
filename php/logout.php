<?php
	require '../db.php';

	unset($_SESSION['logged_user']);

	echo json_encode(array("result"=>'true'));
