<?php
require_once('connection.php');

$codPlanta = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$nomeCientif = $_POST['nomeCientif'];
$localizacao = $_POST['localizacao'];
//TIPO
$codTipo = $_POST['codTipo'];
//RARO
$codRaro = $_POST['codRaro'];
//Imagem
$imagem = $_FILES['imagem'];
$codImagem = $_POST['codimagem'];

$sqlstring = "update planta set codTipo = '$codTipo', codRaro = '$codRaro', nome = '$nome', descricao = '$descricao', nomeCientif = '$nomeCientif', localizacao = '$localizacao' where codPlanta = $codPlanta";

if (!empty($imagem)) {
    preg_match("/.(png|jpg|jpeg){1}$/i", $imagem['name'], $ext);

    $nome_imagem = $codPlanta . '.' . $ext[1] or 'jpg';

    $caminhho_imagem = "../images/planta/" . $nome_imagem;

    move_uploaded_file($imagem['tmp_name'], $caminhho_imagem);

    $sqlstring2 = "update imagem set codImagem = '$codImagem', imagem = '$nome_imagem', codPlanta = '$codPlanta' WHERE codImagem = $codImagem";
    $info1 = mysqli_query($conexao, $sqlstring2);

}
$info = mysqli_query($conexao, $sqlstring);

// verificando o resultado
if (!$info) {
    die('Query Inválida: '.mysqli_error());
} else {
    echo "Alteração realizado com Sucesso!!!!!";
    echo '<a href="./">Voltar</a>';

}

?>
