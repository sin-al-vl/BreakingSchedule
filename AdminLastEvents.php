<head>
	<title>AdminPanel</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<!-- look on the offered events; add oncoming event; replace to last events; watch users; change user; delete user -->
	<div class="info">Last Events</div>
	
		<div class="eventwraper">

			<ul class="events">

				<?php $events = R::findAll( 'lastevents' );

				foreach($events as $event){

					
					echo '<li class="event">
			
							<div class="poster">
								<form method="POST" action="Event.php">
									<input type="hidden" name="id" value="'.$event->id.'">
									<input type="hidden" name="type" value="last">
									<input type="image" src="'.$event->img.'" border="0" alt="Submit" />
								</form>	
							</div>
							<br> 
							<div class="description">
								<hr><hr><hr>
								'.$event->title.'<br>
								'.$event->street.', '.$event->city.', '.$event->country.'<hr>
								WINNER: '.$event->winner.'<hr>
								Judges: '.$event->judges.'<hr>	
								Prise: '.$event->prize.'<hr>
								Entrance: '.$event->ticket.'<hr>
								Date: '.$event->startdate.'/'.$event->enddate.'<hr>
								Info: '.$event->description.'<hr>
								Program: '.$event->program.'<hr>
								Url: '.$event->url.'<br>
								Livestream: '.$event->livestream.'<hr>
								Organizer: '.$event->name.'<hr>

								<form method="POST" action="php/delete_event_script.php">
									<input type="hidden" name = "id" value="'.$event->id.'">
									<input type="submit" class="btn" value="Delete"/>
								</form>
							</div>	
						</li><hr>';

				}?>

			</ul>
		</div>
		


	<?php include 'footer.php'; ?>
</body>