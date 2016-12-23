<?php
	require '../db.php';

	$data = $_POST;

	$event = R::findOne('lastevents', "id = ?", array($data['id']));

	R::trash($event);

	header('Location: ../AdminLastEvents.php');