<!DOCTYPE html>
<html>
<head>
	<title>Add event</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div id="edit-event" class="form">
	<form method="POST" action="php/offer_event_script.php" enctype="multipart/form-data">
		
		<section class="description-section">
			<h2>Which Event?</h2>
			<hr/>

			<section class="table">

				<div class="row">
					<div class="col-1">
						<div>Title</div>
					</div>
					<div class="col-2">
						<input name="title" type="text" placeholder="Event Title" required="true" value=""/>
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Info</div>
					</div>
					<div class="col-2">
						<textarea name="description" placeholder="Summary, Showcases, Rules, Contests e.t.c."></textarea>
					</div>
					<div class="col-3">

					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Program</div>
					</div>
					<div class="col-2">
						<textarea name="program" placeholder="Event program"></textarea>
					</div>
					<div class="col-3">

					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Judges</div>
					</div>
					<div class="col-2">
						<input name="judges" type="text" placeholder="Judge 1, Judge 2, e.t.c."
							value=""/>
					</div>
					<div class="col-3">

					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Prize</div>
					</div>
					<div class="col-2">
						<input name="prize" type="text" placeholder="Event without Prize considered as 'Jam'"
							value=""/>
					</div>
					<div class="col-3">

					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Ticket</div>
					</div>
					<div class="col-2">
						<input name="ticket" type="text" placeholder="Event without Tickets considered as 'Free'"
							value=""/>
					</div>
					<div class="col-3">

					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Web Site</div>
					</div>
					<div class="col-2">
						<input name="url" type="text" placeholder="URL"
							value="" />
					</div>
					<div class="col-3">

					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Poster</div>
					</div>
					<div class="col-2">
						<input name="img" type="file" value="" required="true" />
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>

			</section>

		</section>


		<section class="place-section">
			<h2>Where?</h2>
			<hr/>

			<section class="table">

				<div class="row">
					<div class="col-1">
						<div>Country</div>
					</div>
					<div class="col-2">
						<input name="country" type="text" placeholder="Country" required="true"
							value="" />
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>City</div>
					</div>
					<div class="col-2">
						<input name="city" type="text" placeholder="City" required="true"
							value="" />
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Street</div>
					</div>
					<div class="col-2">
						<input name="street" type="text" placeholder="Street" required="true"
							value=""/>
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>
			</section>

		</section>


		<section class="date-section">
			<h2>When?</h2>
			<hr/>

			<section class="table">

				<div class="row">
					<div class="col-1">
						<div>Start Date</div>
					</div>
					<div class="col-2">
						<input id="start_date" name="start_date" type="date" required="true" value=""/>
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>End Date</div>
					</div>
					<div class="col-2">
						<input id="end_date" name="end_date" type="date" required="true" value=""/>
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>

			</section>

		</section>


		<section class="date-section">
			<h2>Live Stream</h2>
			<hr/>

			<section class="table">

				<div class="row">
					<div class="col-1">
						<div>Live Stream Code</div>
					</div>
					<div class="col-2">
						<textarea name="livestream" name="description" placeholder="Code for embedding"></textarea>
					</div>
					<div class="col-3">
						<div>Give us Live!</div>
					</div>
				</div>

			</section>

		</section>


		<section class="organizer-section">
			<h2>Who is Organizer?</h2>
			<hr/>

			<p>Organizer need to confirm the event via email.</p>

			<section class="table">

				<div class="row">
					<div class="col-1">
						<div>Name</div>
					</div>
					<div class="col-2">
						<input name="name" type="text" placeholder="Last Name, First Name or Nick Name"
														value="" />
					</div>
					<div class="col-3">

					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Email</div>
					</div>
					<div class="col-2">
						<input name="email" type="email" placeholder="Email" required="true"
															value=""/>
					</div>
					<div class="col-3">
						<div><span>*</span>Required</div>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<div>Phone</div>
					</div>
					<div class="col-2">
						<input name="phone" type="phone" placeholder="Phone"
														value="" />
					</div>
					<div class="col-3">

					</div>
				</div>

			</section>



			<section class="table">

				<div class="row">
					<div class="col-1">

					</div>
					<div class="col-2">
						<hr/>
						<input type="submit" class="btn" value="Submit"/>
					</div>
					<div class="col-3">

					</div>
				</div>

			</section>


		</section>

	</form>
</div>

	<?php include 'footer.php'; ?>

	
</body>
</html>