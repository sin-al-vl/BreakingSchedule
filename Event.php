<head>
	<title>AdminPanel</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="info">Event overview</div>
	
		<div class="eventwraper">

			<ul class="events">

				<?php if($_POST['type']=='last'){
					$event = R::findOne( 'lastevents', "id = ?", array($_POST['id']));
				} elseif($_POST['type']=='oncoming') {
					$event = R::findOne( 'oncomingevents', "id = ?", array($_POST['id']));
				}
	
				echo '<li class="event">
		
						<div class="poster">
							<a href="">
								<img src="'.$event->img.'"> 
							</a>	
						</div>
						<br> 
						<div class="description">
							<hr><hr><hr>
							'.$event->title.'<br>
							'.$event->street.', '.$event->city.', '.$event->country.'<hr>'
							.(($_POST['type']=='last') ? "WINNER: ".$event->winner."<hr>" : "").
							'Judges: '.$event->judges.'<hr>	
							Prise: '.$event->prize.'<hr>
							Entrance: '.$event->ticket.'<hr>
							Date: '.$event->startdate.'-'.$event->enddate.'<hr>
							Info: '.$event->description.'<hr>
							Program: '.$event->program.'<hr>
							Url: '.$event->url.'<br>
							Livestream: '.$event->livestream.'<hr>
							Organizer: '.$event->name.'<hr>
						</div>	

					</li><hr>';

				?>

			</ul>
		</div>
		


	<?php include 'footer.php'; ?>
</body>