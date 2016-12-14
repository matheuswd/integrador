<?php
$page_title = 'Flora Marcos Ono';
require_once ('header.php');
require_once ('nav.php');
require_once ('config/database-connection.php');
?>
<header class="jumbotron">
<?php

$ti[0] = $_GET["codTipo"];
$ti[1] = $_GET["tipo"];
    echo '<h1 class="text-center">'. $ti[1] .'</h1>';
?>
</header>

<article class="container">
    <?php

    $ti[0] = $_GET["codTipo"];
    $ti[1] = $_GET["tipo"];
    $sql = "SELECT DISTINCT A.nome, A.codPlanta, A.nomeCientif, A.localizacao, B.codTipo, B.tipo, I.imagem, R.raro 
                      FROM planta A 
                        INNER JOIN tipo B 
                          on A.codTipo = B.codTipo 
                        INNER JOIN imagem I 
                          on A.codPlanta = I.codPlanta 
                        INNER JOIN raridade R
                          on A.codRaro = R.codRaro
                      WHERE B.tipo = '". $ti[1] ."'";
    $sql = $conexao->query($sql);

        echo '
   <ol class="breadcrumb" id="nav-secun-plantas-lista">
        <li><a href="./"><img id="ico-home" src="images/home.ico" alt="imagem do icone referênte a home"></a></li>
        <li >'. $ti[1] .'</li>
    </ol>
        <div class="row">';

        if($sql->num_rows > 0) {

           while ($values = $sql->fetch_array()) {
                $y = 0;
                $x = 0;
                echo '
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            
                <img src="images/'. $values['imagem'] .'">
                <div class="caption">
                    <h3 class="text-center"><a id="link-planta-lista" href="planta.php?nome='. $values['nome'] .'" >' . $values['nome'] . '</a></h3>
                    <table class="table " id="table-bottom">
                        <tr>
                            <td>Nome cientifico: </td>
                            <td>'. $values['nomeCientif'] .'</td>
                        </tr>
                        <tr>
                            <td>Localizado: </td>
                            <td>'. $values['localizacao'] .'</td>
                        </tr>
                        <tr>
                            <td>Raridade: </td>
                            <td>'. $values['raro'] .'</td>
                        </tr>
                    </table>
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
