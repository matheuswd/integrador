<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page_title; ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../assets/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/public.css" >
    <script src="../assets/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
</head>
<?php
require_once ('../nav.php');
require ('../config/database-connection.php');
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
        $sql = "SELECT * From carrousel";
        $sql = $pdo->query($sql);

    $a = 'active';
    $w = 1;

    if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $values) {
                    echo '
                    <div class="item  '. $a .'">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image: url(\'../images/' . $values['imagem'] . '\')"></div>
                        <div class="carousel-caption">
                            <h2>Caption '. $w .'</h2>
                        </div>
                    </div>';
                $a = '';
                $w++;
                }
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
