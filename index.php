<?php

$page_title = 'Flora Marcos Ono';
require('header.php');
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
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
            <div class="fill" style="background-image:url('images/aue.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
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
<article class="container-fluid">
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
    </div>
    <div class="text-center">
        <input type="button" class="btn btn-info" value="Veja Mais">
    </div>
    <h1>Sarracenias</h1>
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
</article>