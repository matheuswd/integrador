<?php

session_start("log");

if ($_SESSION['log'] != "ativo") {
    session_destroy();
    header("location:login.php");
} else {
	echo 'hello';
}
