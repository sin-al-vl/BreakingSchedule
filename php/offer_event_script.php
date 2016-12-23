<?php
	require '../db.php';

	$data = $_POST;


	$offeredEvents = R::dispense('offeredevents');

	$offeredEvents->organizerid = $_SESSION['logged_user']->id;
	$offeredEvents->title = $data['title'];
	$offeredEvents->description = $data['description'];
	$offeredEvents->program = $data['program'];
	$offeredEvents->judges = $data['judges'];
	$offeredEvents->prize = $data['prize'];
	$offeredEvents->ticket = $data['ticket'];
	$offeredEvents->url = $data['url'];
	
	$uploaddir = 'uploads/offeredEvents/';
	$uploadfile = $uploaddir.basename($_FILES['img']['name']);

	if (copy($_FILES['img']['tmp_name'], $uploadfile))
	{
		echo "<h3>Файл успешно загружен на сервер</h3>";
	} else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";}

	echo "<h3>Информация о загруженном на сервер файле: </h3>";
	echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['img']['name']."</b></p>";
	echo "<p><b>Mime-тип загруженного файла: ".$_FILES['img']['type']."</b></p>";
	echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['img']['size']."</b></p>";
	echo "<p><b>Временное имя файла: ".$_FILES['img']['tmp_name']."</b></p>";

	$offeredEvents->img = $uploadfile;

	$offeredEvents->country = $data['country'];
	$offeredEvents->city = $data['city'];
	$offeredEvents->street = $data['street'];
	$offeredEvents->startdate = $data['start_date'];
	$offeredEvents->enddate = $data['end_date'];
	$offeredEvents->livestream = $data['livestream'];
	$offeredEvents->name = $data['name'];
	$offeredEvents->email = $data['email'];
	$offeredEvents->phone = $data['phone'];

	R::store($offeredEvents);
	// header('Location: ../main.php');