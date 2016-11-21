<?php

$page_title = "Log in";

require_once "header.php";

?>
<div class="col-xs-12 col-md-4 text-center">
	<h1>Flora Marcos Ono</h1>
	<form action="verify-login.php" method="POST">
		<label for="username">Usuário: </label>
		<input type="text" name="username" placeholder="Ex: marcos">
		<br>
		<label for="password">Senha: </label>
		<input type="password" name="password" placeholder="Sua senha de acesso">
		<br>
		<input type="submit">
	</form>
</div>
<h1>Welcome to your login page!</h1>
<form action="verify-login.php" method="POST" class="login-form">
	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<input type="submit">
</form>
