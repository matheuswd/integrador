<?php

$page_title = 'Flora Marcos Ono';
require('header.php');
require_once ('nav.php');
require_once ('config/database-connection.php');
?>
<header class="jumbotron">
  <h1 class="text-center">Conheça a minha história</h1>
  <p class="text-center">Do campo a grande cidade</p>
</header>
<article class="container">
    <h1 class="text-center">A historia de Marcos Ono</h1>
    <?php
        $sql = "SELECT * FROM produtor";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $values) {
                $nome_arquivo = '<p>' . nl2br($values['historia']).'</p>';
                $arquivo = explode("<br />", $nome_arquivo);
                for ($w = 0; $w < count($arquivo); $w++){
                    echo '<p>'.$arquivo[$w].'</p>';
                    if ($w == 0) {
                        echo '<img src="images/aue.jpg" class="pull-left col-md-4">';
                    }
                    if ($w == 2) {
                        echo '<img src="images/aue.jpg" class="pull-right col-md-4">';
                    }
                }

            }
        }
echo '
</article>
';
require_once ('footer.php');
?>