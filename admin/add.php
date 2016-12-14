
<form name="login" method="POST" action="gravar-add.php" enctype="multipart/form-data">
    Código:<br>
    <input type="number" name="codigo" maxlength="10" style="width:250px"><br>
    Nome da Planta:<br>
    <input type="text" name="nome" maxlength="150" style="width:500px"><br>
    Descrição:<br>
    <textarea type="text" name="descricao" maxlength="200" style="width:700px"></textarea><br>
    Localização:<br>
    <input type="text" name="localizacao" maxlength="200" style="width:700px"><br>
    Nome Cientifico:<br>
    <input type="text" name="nomeCientif" maxlength="200" style="   width:700px"><br>
    Tipo: <br>
    <div class="form-group">
        <?php
        require ('connection.php');
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
        <?php
        require ('connection.php');
        $query1 = $conexao->query("SELECT * FROM raridade");

        echo "<select name='codRaro'>";
        while($reg1 = $query1->fetch_array()) {
            echo "<option value='".$reg1["codRaro"]."'>".$reg1["raro"]."</option>";
        }
        echo "</select>";


        ?>
    </div>

    Foto de exibição:<br>
    <input type="file" name="imagem" > Obs: Tamanho máximo de 2Mb
    <br><br>
    <input type="submit" value="Gravar">

</form>
<a href="./" >Voltar</a>