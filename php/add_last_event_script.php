<?php
	require '../db.php';

	$data = $_POST;

	$oldEvent = R::findOne('oncomingevents', "id = ?", array($data['id']));


	$lastEvent = R::dispense('lastevents');

	$lastEvent->organizerid = $oldEvent->organizerid;
	$lastEvent->title = $oldEvent->title;
	$lastEvent->description = $oldEvent->description;
	$lastEvent->program = $oldEvent->program;
	$lastEvent->judges = $oldEvent->judges;
	$lastEvent->prize = $oldEvent->prize;
	$lastEvent->ticket = $oldEvent->ticket;
	$lastEvent->url = $oldEvent->url;
	$lastEvent->img = $oldEvent->img;
	$lastEvent->country = $oldEvent->country;
	$lastEvent->city = $oldEvent->city;
	$lastEvent->street = $oldEvent->street;
	$lastEvent->startdate = $oldEvent->startdate;
	$lastEvent->enddate = $oldEvent->enddate;
	$lastEvent->livestream = $oldEvent->livestream;
	$lastEvent->name = $oldEvent->name;
	$lastEvent->email = $oldEvent->email;
	$lastEvent->phone = $oldEvent->phone;


	$lastEvent->winner = $data['winner'];

	R::store($lastEvent);

	R::trash($oldEvent);

	header('Location: ../AdminOncomingEvents.php');