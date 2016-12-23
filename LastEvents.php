<html>
<head>
	<title>LastEvents</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="oncomingEventsDiv">
		<h2>
			Last events 
		</h2>
		
		<ul class="news">

			<?php $events = R::findAll( 'lastevents' );

				foreach($events as $event){

					
					echo '<li><hr>
						<div class="poster">
							<form method="POST" action="Event.php">
								<input type="hidden" name="id" value="'.$event->id.'">
								<input type="hidden" name="type" value="last">
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

			<!-- <li><hr>
				<div class="poster">
					<a href="">
						<img src="media/LastEvents/logo_YaltaSummerJam.jpg"> 
					</a>	
				</div>
				<ul class="description">
					<li>
						Yalta Summer Jam
					</li>
					<li>
						Krimea, Ukraine	
					</li>
					<li>
						Judges: bboy Storm, bboy Lagaet, bboy Focus		
					</li>
					<li>
						Prise: 1000$ cash for first place	
					</li>
					<li>
						Date: 12.11.2016	
					</li>
				</ul>
			</li><hr>
			<li><hr>
				<div class="poster">
					<a href="">
						<img src="media/LastEvents/logo_R16.jpg"> 
					</a>	
				</div>
				<ul class="description">
					<li>
						R16
					</li>
					<li>
						Tokio, Japan	
					</li>
					<li>
						Judges: bboy Neguin, bboy Lilou, bboy Roxrite		
					</li>
					<li>
						Prise: partnership with RedBull	
					</li>
					<li>
						Date: 25.11.2016	
					</li>
				</ul>
			</li><hr>
			<li><hr>
				<div class="poster">
					<a href="">
						<img src="media/LastEvents/logo_UKB-boy.jpg"> 
					</a>	
				</div>
				<ul class="description">
					<li>
						World Bboy Classic 2016
					</li>
					<li>
						London, GreatBritan	
					</li>
					<li>
						Judges: bboy Junior, bboy Niek, bboy Lil-G		
					</li>
					<li>
						Prise: 400$ in 2vs2
					</li>
					<li>
						Date: 30.11.2016	
					</li>
				</ul>
			</li><hr> -->
		</ul>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>


