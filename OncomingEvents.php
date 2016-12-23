<html>
<head>
	<title>OncomingEvents</title>
	
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="oncomingEventsDiv">
		<h2>
			Oncoming events 
		</h2>
		
		<ul class="news">
		
			<?php $events = R::findAll( 'oncomingevents' );

				foreach($events as $event){

					
					echo '<li><hr>
						<div class="poster">
							<form method="POST" action="Event.php">
								<input type="hidden" name="id" value="'.$event->id.'">
								<input type="hidden" name="type" value="oncoming">
								<input type="image" src="'.$event->img.'" border="0" alt="Submit" />
							</form>	
						</div>
						<ul class="description">
							<li>
								'.$event->title.'
							</li>
							<li>
								'.$event->city.', '.$event->country.'	
							</li>
							<li>
								Judges:<br> '.$event->judges.'		
							</li>
							<li>
								Prise:<br> '.$event->prize.'	
							</li>
							<li>
								Date:<br> '.$event->startdate.'	
							</li>
						</ul>
					</li><hr>';
				}
			?>
			
		</ul>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>


