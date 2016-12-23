<!DOCTYPE html>
<html>
<head>
	<title>UserPanel</title>
</head>
<body>
	<?php include 'header.php'; ?>


	<div class="info">Hello, <?php echo $_SESSION['logged_user']->email; ?>!</div>
	<div class="button-panel">
		<input type="button" class="btn" onclick="window.location.href = 'ChangeEmail.php'" value="Change email"/>
		<input type="button" class="btn" onclick="window.location.href = 'ChangePassword.php'" value="Change password"/>
	</div>

	<?php include 'footer.php'; ?>

</body>
</html>