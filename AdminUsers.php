<head>
	<title>AdminPanel</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<!-- look on the offered events; add oncoming event; replace to last events; watch users; change user; delete user -->
	<div class="info">User table</div>
	
		<ul class="user-table">
			<?php $users = R::findAll( 'users' );

				foreach($users as $user){

					
					echo '<li class="user">
							<form method="POST" action="php/change_user_script.php" >
								<div class="col-1">
									<div>ID</div>
								</div>
								<div class="col-2">
									<input name="id" type="text" placeholder="New ID" value="'.$user->id.'"/>
								</div>
								<div class="col-1">
									<div>E-mail</div>
								</div>
								<div class="col-2">
									<input name="email" type="text" placeholder="New E-mail" value="'.$user->email.'"/>
								</div>

								<div class="col-1">
									<div>Password</div>
								</div>
								<div class="col-2">
									<input name="pwd" type="text" placeholder="New password" value=""/>
								</div>

								<div class="col-1">
									<div>Type</div>
								</div>
								<div class="col-2">
									<input name="type" type="text" placeholder="New type" value="'.$user->type.'"/>
								</div>
								<input type="submit" value="Save"/>
							</form>		
						</li>';
				}
			?>
				
		</ul>
	

	<?php include 'footer.php'; ?>
</body>