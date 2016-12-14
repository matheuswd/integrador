<?php

session_start("log");

if ($_SESSION['log'] != "ativo") {
    session_destroy();
    header("location:login.php");
}

if ( isset( $_SESSION[ 'id' ] ) && ! empty( $_SESSION[ 'id' ] ) ) {
	echo "Area Restrita";
    echo '<br>'. $_SESSION['nome'];
} else {
	header( 'Location: login.php' );
}
