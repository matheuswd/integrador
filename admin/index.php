<?php

session_start();

if ( isset( $_SESSION[ 'id' ] ) && ! empty( $_SESSION[ 'id' ] ) ) {
	echo "Area Restrita";
} else {
	header( 'Location: login.php' );
}
