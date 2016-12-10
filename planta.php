<?php
$page_title = 'Flora Marcos Ono';
require('header.php');
require_once ('nav.php');
require_once ('config/database-connection.php');
$v = $_GET['nome'];
?>
<header class="jumbotron">
    <h1>É ARROZ</h1>
</header>
<article class="container">

<?php
$sql = "SELECT A.nome, A.codPlanta, A.descricao, B.codTipo, B.tipo FROM planta A INNER JOIN tipo B on A.codTipo = B.codTipo WHERE A.nome = '$v'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $user) {
        echo '<div class="row">
            <div class="pull-right">

    <div class="col-md-5">
    <div class="row">
    <img src="images/b52.jpg" class="col-md-12 pull-left plantaimg "  >
    <img src="images/b52.jpg" class="col-md-3 plantaimg" >
    <img src="images/b52.jpg" class="col-md-3 plantaimg" >
    <img src="images/b52.jpg" class="col-md-3 plantaimg" >
    <img src="images/b52.jpg" class="col-md-3 plantaimg" >
    </div>
    </div>
    <h1 class="text-center">'. $user['tipo'].' '.$v.'</h1>';
        $nome_arquivo = '<p>' . nl2br($user['descricao']).'</p>';
        $arquivo = explode("<br />", $nome_arquivo);
        for ($w = 0; $w < count($arquivo); $w++){
            echo '<p>'.$arquivo[$w].'</p>';
        }
        echo '
        </div>
        </div>';



    }
}

?>

</article>

<?php
require_once ('footer.php');
?>