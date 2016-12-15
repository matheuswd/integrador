<?php
$page_title = 'Flora Marcos Ono';
require('header.php');
require_once ('nav.php');
require_once ('config/database-connection.php');
$v = $_GET['nome'];
?>
    <article class="container" id="down">

        <?php
        $sql = "SELECT A.nome, A.codPlanta, A.descricao, B.codTipo, B.tipo, I.imagem, A.nomeCientif, A.localizacao, R.raro FROM planta A INNER JOIN tipo B on A.codTipo = B.codTipo INNER JOIN imagem I on A.codPlanta = I.codPlanta  INNER  JOIN  raridade R on A.codRaro = R.codRaro WHERE A.nome = '$v'";
        $sql = $conexao->query($sql);
        if($sql->num_rows > 0) {
            while ($user = $sql->fetch_array()) {

                echo '
       <ol class="breadcrumb" id="nav-secun-plantas-lista">
        <li><a id="nav-secun-plantas-nome" href="./">Home</a></li>
        <li><a id="nav-secun-plantas-nome" href="lista.php?codTipo='. $user['codTipo'] .'&tipo='. $user['tipo'].'" >'. $user['tipo'] .'</a></li>
        <li class="active" id="nav-secun-plantas-nome">'. $user['nome'] .'</li>
    </ol>
    <div class="row">
            <div class="pull-right">

    <div class="col-sm-6 col-md-6">
                <img src="images/planta/' . $user['imagem'] . '" class="img-responsive">
                    <table class="table " id="table-bottom  ">
                        <tr>
                            <td>Nome cientifico: </td>
                            <td>'. $user['nomeCientif'] .'</td>
                        </tr>
                        <tr>
                            <td>Localizado: </td>
                            <td>'. $user['localizacao'] .'</td>
                        </tr>
                        <tr>
                            <td>Raridade: </td>
                            <td>'. $user['raro'] .'</td>
                        </tr>
                    </table>
    </div>
    
    <h1 class="text-center">'. $user['tipo'].' '.$v.'</h1>';
                $nome_arquivo = '<p >' . nl2br($user['descricao']).'</p>';
                $arquivo = explode("<br />", $nome_arquivo);
                for ($w = 0; $w < count($arquivo); $w++){
                    echo '<p class="padlr">'.$arquivo[$w].'</p>';
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