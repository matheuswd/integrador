<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">


    <title>a</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../assets/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/main.css" >
    <script src="../assets/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
</head>
<body class="container-fluid">
    <article class="container">
        <?php
        $page_title = 'a';
        require_once ('connection.php');
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
                      WHERE B.tipo = '". $select[$x]['tipo'] ."'";
            $sql = $conexao->query($sql);
            echo '
        <div class="row">
        <h1 class="text-center">' . $select[$x]['tipo'] . '</h1>';

            if( $sql->num_rows > 0) {
                while ($values = $sql->fetch_array()) {
                    echo  ' 
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="../images/planta/' . $values['imagem'] . '">
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
                        <tr>
                            <td>Id: </td>
                            <td>'. $values['codPlanta'] .'</td>
                        </tr>
                    </table>
                    <div class="row">
                    <div class="col-md-12">
                        <a href="update-planta-crud.php?codPlanta='. $values['codPlanta'] .'" ><input type="button" class="btn btn-info col-md-4 col-md-offset-1" value="Alterar"></a>
                        <a href="#.php?codPlanta='. $values['codPlanta'] .'" ><input type="button" class="btn btn-danger col-md-4 col-md-offset-2" value="Deletar"></a>
                    </div></div>
                </div>
            </div>
        </div>';    
                }
                echo '
       
    </div>';
            }
        }
        ?>
    </article>
</body>
</html>

