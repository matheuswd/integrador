<?php

$dsn = 'mysql:dbname=hana;host=localhost';
$dbUsername = 'root';
$dbPassword = '';

try {

	$pdo = new PDO( $dsn, $dbUsername, $dbPassword );
} catch( PDOException $e ) {

	echo 'A conexão falhou. Confira o erro: ' . $e->getMessage();

}
