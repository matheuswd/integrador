<?php

$dsn = 'mysql:dbname=hana;host=localhost';
$dbUsername = 'root';
$dbPassword = 'root';

session_start();

if ( isset( $_POST[ 'username' ] ) && ! empty( $_POST[ 'username' ] ) ) {
	$username = $_POST[ 'username' ];
}

if ( isset( $_POST[ 'password' ] ) && ! empty( $_POST[ 'password' ] ) ) {
	$password = md5($_POST[ 'password' ]);
}

try {

	$database = new PDO( $dsn, $dbUsername, $dbPassword );
	$query = $database->query( "SELECT * FROM user WHERE username = '$username' AND password = '$password'" );

	if ( $query->rowCount() > 0 ) {
		$data = $query->fetch();
		$_SESSION[ 'id' ] = $data[ 'id' ];
		header( "Location: admin/index.php" );
	} else {
		header( "Location: login.php" );
	}

} catch ( PDOException $e ) {

	echo "Falhou: " . $e->getMessage();

}


