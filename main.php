<html>
	<head>
		<title>Breaking schedule</title>
</head>
	</head>
	<body>
		<?php include 'header.php'; ?>

		<div class="main">

			<div class="content">

				<header>
					Oncoming events <a href="OncomingEvents.php">details</a>
				</header>

				<div class="slidewrapper">

					<ul class="slider">

						<?php $events = R::findAll( 'oncomingevents', 'LIMIT 4 ' );

							foreach($events as $event){

								
								echo '<li class="slide">
										
										<div class="poster">
											<div class="poster">
											<form method="POST" action="Event.php">
												<input type="hidden" name="id" value="'.$event->id.'">
												<input type="hidden" name="type" value="oncoming">
												<input type="image" src="'.$event->img.'" border="0" alt="Submit" />
											</form>	
										</div>	
										</div>
										<br> 
										<div class="description">
											'.$event->title.'<br>
											'.$event->city.', '.$event->country.'
											<hr>
											Date: '.$event->startdate.'
											<hr>
											Judges: '.$event->judges.'
											<hr>
										</div>	
									</li><hr>';
							}
						?>

					</ul>

					<ul class="bullets"></ul>		
				</div>
				
			</div>
				

			<div class="sidebar">
				<header>Last events <a href="LastEvents.php">details</a></header>
				<div class="eventwraper">
				<ul class="events">

					<?php $events = R::findAll( 'lastevents' );

						foreach($events as $event){

							
							echo'<li class="event">
									<div class="poster">
										<form method="POST" action="Event.php">
											<input type="hidden" name="id" value="'.$event->id.'">
											<input type="hidden" name="type" value="last">
											<input type="image" src="'.$event->img.'" border="0" alt="Submit" />
										</form>		
									</div>
									<br> 
									<div class="description">
										'.$event->title.'<br>
										'.$event->city.', '.$event->country.'
									</div>	
								</li><hr>';

					}?>
				</ul>
				</div>
			</div>

		</div>

		<?php include 'footer.php'; ?>

		<script src="js/slider.js?t=<?php echo(microtime(true)); ?>" defer></script>

	</body>
</html>