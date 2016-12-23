<!DOCTYPE html>
<html>
<head>
	<title>ChangeEmail</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="info">
		<form id="change-email" action="php/change_email_script.php" method="POST">
			<div>
				<div class="col-1">PASSWORD:</div>
				<div class="col-2">
					<input name="pwd" type="password" placeholder="Old password" value="">	
				</div>
			</div>
			<br>
			<div>
				<div class="col-1">NEW EMAIL:</div>
				<div class="col-2">
					<input name="nemail" type="email" placeholder="New email" value="<?php echo @$data[email]; ?>">	
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