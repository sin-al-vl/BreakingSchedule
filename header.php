<!DOCTYPE html>
<html>
<head>
		<link href="style.css?t=<?php echo(microtime(true)); ?>" rel="stylesheet">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="js/utils.js?t=<?php echo(microtime(true)); ?>"></script>
		<script src="js/login.js?t=<?php echo(microtime(true)); ?>" defer></script>	
</head>
<body>
	<?php require 'db.php'; ?>
		<header class="menu-wrapper">

			<div class="logo-wrapper">
				<a href="main.php">
					<img src="media/logo.jpg">
				</a>
				<div>
					BREAKING
					<br>
					SCHEDULE
				</div>
			</div>

			<nav>
				<ul>
					<li>
						<a href="OncomingEvents.php"><u>Oncoming<br>events</u></a>
					</li>
					<li>
						<a href="LastEvents.php"><u>Last<br>events</u></a>
					</li>
					<li>
						<u id="offerer" onclick="offerEventOnClick()">Offer<br>event</u>
					</li>
					<li id="login-menu-item">
						<u onclick="logInOut()">LogIn</u>
						

						<div id="login-sub-menu" class="sub-menu">
							
							<form id="login-form" action="login.php" method="POST">
								<div>
									<div class="col-1">EMAIL:</div>
									<div class="col-2">
										<input name="email" type="email" placeholder="email" value="<?php echo @$data[email]; ?>">	
									</div>
								</div>
								<div>
									<div class="col-1">PASSWORD:</div>
									<div class="col-2">
										<input name="pwd" type="password" placeholder="Password" value="">	
									</div>
								</div>
								<div>
									<div class="col-1">&nbsp;</div>									
									<div class="col-2">										
										<input id="Enter" name="Enter" class="submit-btn" type="button" onclick="onClickSubmit('php/login.php')" value="Enter">
										<input id="Signin" name="Signin" class="submit-btn" type="button" onclick="onClickSubmit('php/signin.php')" value="Signin">
									</div>
								</div>
							</form>

						</div>

						<div id="welcome-block" onclick="userPage()">
							Welcome,<br>
							<?php if(isset($_SESSION['logged_user'])){ echo $_SESSION['logged_user']->email;} ?>!
						</div>

					</li>

				</ul>

			</nav>

		</header>

		<script type="text/javascript">

			$(document).ready(function(){
			    <?php if(isset($_SESSION['logged_user'])): ?>
			    	userIn("<?php echo $_SESSION['logged_user']->email; ?>", "<?php echo $_SESSION['logged_user']->type; ?>");
			    <?php endif; ?>
			});

			

			function offerEventOnClick(){
				<?php if(isset($_SESSION['logged_user'])) : ?>

					window.location.href = "OfferEvent.php";

				<?php else : ?>
					
					alert('Authorize yourself, please!');

				<?php endif; ?>
			}

			function userPage(){
				<?php if(isset($_SESSION['logged_user']->type) && $_SESSION['logged_user']->type == 'admin') : ?>
					window.location.href = 'AdminPanel.php';
				<?php else : ?>
					window.location.href = 'UserPanel.php';
				<?php endif; ?>
			}
		</script>
</body>
</html>