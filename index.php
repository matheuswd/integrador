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

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
        <div class="fill" style="background-image: url('images/phantom.jpg')"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/reddragon.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/b52.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 4</h2>
            </div>
        </div>
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

        $sql = "SELECT COUNT(*) FROM tipo";
        $select = $pdo->query("SELECT tipo FROM tipo ")->fetchAll();

        // atribuindo a quantidade de linhas retornadas
        $count = count($select);

        // imprimindo o resultado


        $cont = 0;
        for ($as = 0; $as < count($select); $as++) {

            $sql = "SELECT A.nome, A.codPlanta, B.codTipo, B.tipo FROM planta A INNER JOIN tipo B on A.codTipo = B.codTipo WHERE B.tipo = '". $select[$as]['tipo'] ."' ORDER BY rand()";
            $sql = $pdo->query($sql);


            echo '
        <div class="row">
        <h1 class="text-center">' . $select[$as]['tipo'] . '</h1>';

            if($sql->rowCount() > 0) {

                $cont = 0;
                foreach ($sql->fetchAll() as $values) {
                    $y = 0;
                    $x = 0;
                    echo '
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3 class="text-center"><a href="planta.php?nome='. $values['nome'] .'" >' . $values['nome'] . '</a></h3>
                    <p>'. $values['codPlanta'] .'</p>
                </div>
            </div>
        </div>';
                    $x = 0;
                    $cont++;
                    if ($cont > 5){
                        break;
                    }
                }
                echo '
        <div class="text-center col-md-12">
            <a href="lista.php?codTipo='. base64_encode($values['codTipo']) .'&titulo='. base64_encode($values['tipo']) .'" ><input type="button" class="btn btn-info" value="Veja Mais"></a>
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
<?php require_once ('footer.php');