<?php
require_once ('connection.php');

$codigo = $_GET['codPlanta'];

$sqlstring = "SELECT A.nome, A.codPlanta, A.descricao, A.nomeCientif, A.localizacao, B.codTipo, B.tipo, I.imagem, I.codImagem, R.raro 
                      FROM planta A 
                        INNER JOIN tipo B 
                          on A.codTipo = B.codTipo 
                        INNER JOIN imagem I 
                          on A.codPlanta = I.codPlanta 
                        INNER JOIN raridade R
                          on A.codRaro = R.codRaro
                      WHERE A.codPlanta = $codigo";
$info = mysqli_query($conexao, $sqlstring);

if (!$info) {
    die('Query Inválida: '.mysqli_error());
} else {
    echo "Visualização dos dados para alteração.";
    $dados = mysqli_fetch_array($info);
}

?>
<form name="login" method="POST" action="update-lista-gravar.php" enctype="multipart/form-data">
    Código:<br>
    <input type="text" name="codigo" maxlength="10" style="width:250px" value="<?php  echo $dados['codPlanta'];?>" readonly ><br>
    Nome da Planta:<br>
    <input type="text" name="nome" maxlength="150" style="width:500px" value="<?php  echo $dados['nome'];?>" ><br>
    Descrição:<br>
    <textarea type="text" name="descricao" maxlength="" rows="20" style="width:800px" value="" ><?php  echo nl2br($dados['descricao']);?></textarea><br>
    Localização:<br>
    <input type="text" name="localizacao" maxlength="200" style="width:700px" value="<?php  echo $dados['localizacao'];?>" ><br>
    Nome Cientifico:<br>
    <input type="text" name="nomeCientif" maxlength="200" style="   width:700px" value="<?php  echo $dados['nomeCientif'];?>" ><br>
    Tipo: <br>
        <div class="form-group">
        <input type="text" name="" maxlength="200" style="   width:100px" value="<?php  echo $dados['tipo'];?>" readonly> >
        <?php

        $query = $conexao->query("SELECT codTipo, tipo FROM tipo");

        echo "<select name='codTipo'>";
        while($reg = $query->fetch_array()) {
            echo "<option value='".$reg["codTipo"]."'>".$reg["tipo"]."</option>";
        }
        echo "</select>";

        ?>
    </div>
    Raridade: <br>
    <div class="form-group">
        <input type="text" name="" maxlength="200" style="   width:100px" value="<?php  echo $dados['raro'];?>" readonly> >

        <?php

        $query1 = $conexao->query("SELECT * FROM raridade");

        echo "<select name='codRaro'>";
        while($reg1 = $query1->fetch_array()) {
            echo "<option value='".$reg1["codRaro"]."'>".$reg1["raro"]."</option>";
        }
        echo "</select>";

        ?>
    </div>
    Foto de exibição:<br>
    <?php
    print_r($dados['imagem']);
    if (isset($dados['imagem'])){
    echo '<br>
          <img src=../images/planta/'.$dados['imagem'].' name="imagem" class="img-responsive" values="'. $dados['imagem'] .'">';
    }
        echo '<input type="file" name="imagem" value="'.$dados['imagem'].' "> Obs: Tamanho máximo de 2Mb
        <input type="hidden" name = "codimagem" value="'.$dados['codImagem'].'" >
    <br><br>';


    ?>
    



    <input type="submit" value="Gravar">

</form>
<a href="./" >Voltar</a>