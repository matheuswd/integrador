<?php
$page_title = 'Flora Marcos Ono';
require_once('header.php');
require_once ('nav.php');
require_once ('config/database-connection.php');
?>
    <header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php

        $sql = "SELECT imagem FROM carrousel WHERE  obs = 'banner'";
        $info = mysqli_query($conexao, $sql);
        $a = 'active';
        $w = 1;
            while ($values = mysqli_fetch_array($info)) {
                echo '
                    <div class="item  '. $a .'">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image: url(\'images/' . $values['imagem'] . '\')"></div>
                        <div class="carousel-caption">
                            <h2>Caption '. $w .'</h2>
                        </div>
                    </div>';
                $a = '';
                $w++;
            }

        ?>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

    </header>
    <article class="container">
        <?php

        $sql   = "SELECT COUNT(*) FROM tipo";
        $select = "SELECT codTipo, tipo FROM tipo";
        $select = $conexao->query($select);
        $select = $select->fetch_all(MYSQLI_ASSOC);

        // imprimindo o resultado
        $cont = 0;
        for ($x = 0; $x < count($select); $x++) {

            $sql = "SELECT DISTINCT A.nome, A.codPlanta, A.nomeCientif, A.localizacao, B.codTipo, B.tipo, I.imagem, R.raro 
                      FROM planta A 
                        INNER JOIN tipo B 
                          on A.codTipo = B.codTipo 
                        INNER JOIN imagem I 
                          on A.codPlanta = I.codPlanta 
                        INNER JOIN raridade R
                          on A.codRaro = R.codRaro
                      WHERE B.tipo = '". $select[$x]['tipo'] ."' 
                      ORDER BY rand() ";
            $sql = $conexao->query($sql);
            echo '
        <div class="row">
        <h1 class="text-center">' . $select[$x]['tipo'] . '</h1>';

            if( $sql->num_rows > 0) {
                while ($values = $sql->fetch_array()) {
                    echo  ' 
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/planta/' . $values['imagem'] . '">
                <div class="caption">
                    <h3 class="text-center"><a href="planta.php?nome=' . $values['nome'] . '" >' . $values['nome'] . '</a></h3>
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
        </div>';    $ct = $values['codTipo'];
                    $tp = $values['tipo'];
                    if ($cont > 1){
                        break;
                    }
                    $cont++;
                    $w++;
                }
                $cont = 0;
                echo '
        <div class="text-center col-md-12">
            <a href="lista.php?codTipo='. $ct .'&tipo='. $tp .'" ><input type="button" class="btn btn-info" value="Veja Mais"></a>
        </div>
    </div>';
                }
        }
        ?>
    </article>
    <section class="container" >
        <div class="row">
            <form class="col-md-5">
                <h2 class="text-center">Mande sua duvida</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Titulo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Comentario</label>
                            <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Comentario"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success pull-right">
                    </div>
                </div>
            </form>
            <div class="col-md-7 pull-right">
                <h2 class="text-center">Localização</h2>
                <iframe
                    width="100%"
                    height="295px"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY
      &q=Butchart+Gardens+Victoria+BC
      &attribution_source=Google+Maps+Embed+API
      &attribution_web_url=http://www.butchartgardens.com/
      &attribution_ios_deep_link_id=comgooglemaps://?daddr=Butchart+Gardens+Victoria+BC" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
<?php require_once ('footer.php'); ?>