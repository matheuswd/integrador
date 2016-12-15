<?php require_once('connection.php');

session_start("log");

if ($_SESSION['log'] != "ativo") {
    session_destroy();
    header("location:login.php");
}

if ( !isset( $_SESSION[ 'id' ] ) &&  empty( $_SESSION[ 'id' ] ) ) {
    header( 'Location: login.php' );
}

// PLANTA
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


// montando e executando a string
$sqlstring = "insert into planta (codPlanta, nome, descricao, nomeCientif, localizacao, codTipo, codRaro) 
          values ($codPlanta, '$nome', '$descricao', '$nomeCientif', '$localizacao', $codTipo, $codRaro)";


preg_match("/.(png|jpg|jpeg){1}$/i", $imagem['name'], $ext);

$nome_imagem = $nome .'.'. $ext[1];
$caminhho_imagem = "../images/". $nome_imagem;

move_uploaded_file($imagem['tmp_name'], $caminhho_imagem);

$sqlimg = "INSERT INTO imagem (imagem, codPlanta) VALUES ('$nome_imagem', $codPlanta)";


$info = $conexao->query($sqlstring);
$info2 = $conexao->query($sqlimg);
// verificando o resultado
if (!$info && !$info2) {
    die('Query Inválida: '.mysqli_error());
} else {
    echo "Cadastro realizado com Sucesso!!!!!";
    echo '<a href="./">Voltar</a>';
}
?>
