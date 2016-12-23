<!DOCTYPE html>
<html>
<head>
	<title>ChangePassword</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="info">
		<form id="change-email" action="php/change_password_script.php" method="POST">
			<div>
				<div class="col-1">OLD PASSWORD:</div>
				<div class="col-2">
					<input name="opwd" type="password" placeholder="Old password" value="">	
				</div>
			</div>
			<br>
			<div>
				<div class="col-1">NEW PASSWORD:</div>
				<div class="col-2">
					<input name="npwd" type="password" placeholder="New password" value="">	
				</div>
			</div>
			<div>
				<div class="col-1">&nbsp;</div>									
				<div class="col-2">									
					<input type="submit" class="submit-btn" value="Save"/>
				</div>
			</div>
		</form>
	</div>
	<?php include 'footer.php'; ?>

</body>
</html>