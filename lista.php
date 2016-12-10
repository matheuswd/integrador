<?php
$page_title = 'Flora Marcos Ono';
require_once ('header.php');
require_once ('nav.php');
require_once ('config/database-connection.php');
?>
<header class="jumbotron">

</header>
<article class="container">
    <?php
    $ti[0] = base64_decode($_GET["codTipo"]);
    $ti[1] = base64_decode($_GET["titulo"]);

        $sql = "SELECT A.nome, A.codPlanta, B.tipo FROM planta A INNER JOIN tipo B on A.codTipo = B.codTipo WHERE B.codTipo = '$ti[0]'";
        $sql = $pdo->query($sql);

        echo '
        <div class="row">
        <h1 class="text-center">' . $ti[1] . '</h1>';

        if($sql->rowCount() > 0) {

            foreach ($sql->fetchAll() as $values) {
                $y = 0;
                $x = 0;
                echo '
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3 class="text-center">' . $values['nome'] . '</h3>
                    <p>'. $values['codPlanta'] .'</p>
                </div>
            </div>
        </div>';
                $x = 0;
            }
            echo '
    </div>';
        }
    ?>

</article>
<?php
require_once ('footer.php');
?>
