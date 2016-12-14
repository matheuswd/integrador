<?php

session_start();

if ( isset( $_SESSION[ 'id' ] ) && ! empty( $_SESSION[ 'id' ] ) ) {
	header( "Location: index.php" );
} 

$page_title = "Login";

require_once "header-admin.php";


?>

<body class="background">
 <video loop muted autoplay class="fullscreen-bg__video">
    <source src="assets/footage.webm" type="video/webm">
</video>
<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0; 
	position: fixed;
	top: 50%;
	left: 50%;
	/* bring your own prefixes */
	transform: translate(-50%, -50%);">
	<div class="logo">Flora Marcos Ono</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left" method="POST" action="verify-login.php">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="login" name="login" placeholder="username">
					</div>
					<div class="form-group">
						<label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="password">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</body>