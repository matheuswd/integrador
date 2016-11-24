<?php

$page_title = "Login";

require_once "header.php";

?>
<div class="col-xs-12 col-md-4">
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