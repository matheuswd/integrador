<?php

$page_title = 'Flora Marcos Ono';
require('header.php');
require_once ('nav.php');
require_once ('config/database-connection.php');

echo '<header class="jumbotron">';

$sql = "SELECT * FROM idioma";
$stm = $conexao->query($sql);
$resultset = $stm->fetch_all(MYSQLI_ASSOC);

if(!isset($_GET['idioma'])){
    $idioma = "pt";
} else if ($_GET['idioma'] != 'pt' && $_GET['idioma'] != 'en' && $_GET['idioma'] != 'es') {
    $idioma = "pt";
} else {
    $idioma = $_GET['idioma'];
}
echo '

  <h1 class="text-center">'.$resultset[0][$idioma].'</h1>
</header>
<article class="container">
    <h1 class="text-center">'.$resultset[1][$idioma].'</h1>';

for($x = 2; $x < count($resultset); $x++) {
$nome_arquivo = '<p>' . nl2br($resultset[$x][$idioma]).'</p>';
$arquivo = explode("<br />", $nome_arquivo);
for ($w = 0; $w < count($arquivo); $w++) {
    echo '<p>' . $arquivo[$w] . '</p>';

    $sql1 = "SELECT imagem, obs FROM carrousel WHERE obs = 'lugar'";
    $stm1 = $conexao->query($sql1);
    $resultset1 = $stm1->fetch_all(MYSQLI_ASSOC);
    // Conexao com o banco
    if ($w == 0 ){
        echo '<img src="images/' . $resultset1[0]['imagem'] . '" class="pull-left col-md-4" id="padl">';
    }
    if ($w == 2) {
        echo '<img src="images/' . $resultset1[1]['imagem'] . '" class="pull-right col-md-4" id="padr">';
    }
}
}



echo '
</article>
<form method="get">
<input type="submit" name="idioma" value="en">
<input type="submit" name="idioma" value="pt">
<input type="submit" name="idioma" value="es">
</form>
';
require_once ('footer.php');
?>