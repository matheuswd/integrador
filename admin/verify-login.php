<?php
require_once ('connection.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$sqlstring = "select * from user where login = '$login' and senha='$senha'";
$info = mysqli_query($conexao, $sqlstring);
if (!$info) {
    die('Query Inválida: ' . mysqli_error());
}

$registro = mysqli_num_rows($info);


if($registro!=1) {

    echo "Usuário não localizado!!!!!";
    echo "<br><a href='index.php'>Voltar</a>";

} else {

    echo "Bem vindo ao sistema";
    $dados = mysqli_fetch_array($info);

    session_start('log');
    $_SESSION['id'] = $dados['codUser'];
    $_SESSION['nome'] = $dados['login'];
    $_SESSION['log'] = 'ativo';

    header("location:index.php");

}


?>

