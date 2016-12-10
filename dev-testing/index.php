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
<article class="container">
    <?php

require_once ('../config/database-connection.php');

$sql = "SELECT COUNT(*) FROM tipo";
$select = $pdo->query("SELECT tipo FROM tipo ")->fetchAll();

// atribuindo a quantidade de linhas retornadas
$count = count($select);

// imprimindo o resultado


$cont = 0;
for ($as = 0; $as < count($select); $as++) {

    $sql = "SELECT A.nome, A.codPlanta, B.tipo FROM planta A INNER JOIN tipo B on A.codTipo = B.codTipo WHERE B.tipo = '". $select[$as]['tipo'] ."' ORDER BY rand()";
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
                    <h3 class="text-center">' . $values['nome'] . '</h3>
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
            <a href="lista.php"><input type="button" class="btn btn-info" value="Veja Mais"></a>
        </div>
    </div>';
    }
}
?>

</article>

