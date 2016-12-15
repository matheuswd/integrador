<?php

session_start("log");

if ($_SESSION['log'] != "ativo") {
    session_destroy();
    header("location:login.php");
}

if ( !isset( $_SESSION[ 'id' ] ) &&  empty( $_SESSION[ 'id' ] ) ) {
    header( 'Location: login.php' );
} else {
    echo '<h1>Bem Vindo, '. $_SESSION['nome'] .'</h1>';
    echo '<p><a href="create-planta-crud.php">Add Item</a></p>';
    echo '<p><a href="create-banner.php">Alterar a Home (Banner, mapa e redes sociais)</a></p>';
    echo '<p><a href="lista-crud.php">Lista de Todas as Plantas</a></p>';
}
