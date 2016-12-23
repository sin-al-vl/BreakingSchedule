<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="info">Hello, <?php echo $_SESSION['logged_user']->email; ?>!</div>
	<div class="button-panel">
		<input type="button" class="btn" onclick="window.location.href = 'ChangeEmail.php'" value="Change email"/>
		<input type="button" class="btn" onclick="window.location.href = 'ChangePassword.php'" value="Change password"/>
		<hr>
		<div class="admin-users">
			<input type="button" class="btn" onclick="window.location.href = 'AdminUsers.php'" value="Show users"/>
		</div>
		<hr>
		<div class="admin-events">
			<input type="button" class="btn" onclick="window.location.href = 'AdminOfferedEvents.php'" value="Show offered events"/>
			<input type="button" class="btn" onclick="window.location.href = 'AdminOncomingEvents.php'" value="Show oncoming events"/>
			<input type="button" class="btn" onclick="window.location.href = 'AdminLastEvents.php'" value="Show last events"/>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>