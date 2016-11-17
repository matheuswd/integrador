<?php

$username = $_POST[ 'username' ];
$password = md5($_POST[ 'password' ]);

echo "$username - $password";