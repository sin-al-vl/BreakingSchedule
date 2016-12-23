<?php
	require '../db.php';

	$data = $_POST;


	$oncomingEvents = R::dispense('oncomingevents');

	$oncomingEvents->organizerid = $data['organizerid'];
	$oncomingEvents->title = $data['title'];
	$oncomingEvents->description = $data['description'];
	$oncomingEvents->program = $data['program'];
	$oncomingEvents->judges = $data['judges'];
	$oncomingEvents->prize = $data['prize'];
	$oncomingEvents->ticket = $data['ticket'];
	$oncomingEvents->url = $data['url'];

	$oncomingEvents->img = $data['img'];

	$oncomingEvents->country = $data['country'];
	$oncomingEvents->city = $data['city'];
	$oncomingEvents->street = $data['street'];
	$oncomingEvents->startdate = $data['start_date'];
	$oncomingEvents->enddate = $data['end_date'];
	$oncomingEvents->livestream = $data['livestream'];
	$oncomingEvents->name = $data['name'];
	$oncomingEvents->email = $data['email'];
	$oncomingEvents->phone = $data['phone'];

	R::store($oncomingEvents);

	header('Location: ../AdminOfferedEvents.php');