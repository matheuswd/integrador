<?php

$page_title = 'Flora Marcos Ono';
require_once('header.php');
require_once ('nav.php');
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
    <div class="row">
        <h1 class="text-center">Dionaeas Muscipulas</h1>
        <?php

        $values = array (
            0 => array(
                'img' => 'images/aue.jpg',
                'nome' => 'AUE PLANTA'
            ),
            1 => array(
            'img' => 'images/b52.jpg',
            'nome' => 'Plantas diferentes'
            ),
            2 => array(
                'img' => 'images/aue.jpg',
                'nome' => 'AUE PLANTA'
            )
        );
        for ($x = 0; $x < count($values); $x++) {
        echo'
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="'.$values[$x]['img'].'" alt="...">
                <div class="caption">
                    <h3 class="text-center">'.$values[$x]['nome'].'</h3>
                    <p>AAA</p>
                    <p>BBB</p>
                    <p>CCC</p>
                </div>
            </div>
        </div>';
        }
        ?>
    <div class="text-center">
        <a href="#"><input type="button" class="btn btn-info" value="Veja Mais"></a>
    </div>
    <h1 class="text-center">Sarracenias</h1>
    <?php

    $values = array (
        0 => array(
            'img' => 'images/aue.jpg',
            'nome' => 'AUE PLANTA'
        ),
        1 => array(
            'img' => 'images/phantom.jpg',
            'nome' => 'Plantas diferentes'
        ),
        2 => array(
            'img' => 'images/reddragon.jpg',
            'nome' => 'AUE PLANTA'
        )
    );
    for ($x = 0; $x < count($values); $x++) {
        echo'
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="'.$values[$x]['img'].'" alt="...">
                <div class="caption">
                    <h3 class="text-center">'.$values[$x]['nome'].'</h3>
                    <p>AAA</p>
                    <p>BBB</p>
                    <p>CCC</p>
                </div>
            </div>
        </div>';
    }
    ?>
    <div class="text-center">
        <a href="#"><input type="button" class="btn btn-info" value="Veja Mais"></a>
    </div>
    </div>
</article>
<section class="container" >
<div class="row">
    <div class="col-md-6 ">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Titulo</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mensagem</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-default pull-right">Submit</button>
        </form>
    </div>
    <div class="col-md-6">
        <iframe
            width="100%"
            height="370px"
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