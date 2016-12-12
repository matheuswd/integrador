<?php
require '../config/database-connection.php';

if (isset($_POST['nome']) && empty($_POST['nome']) == false){
    if (isset($_POST['codTipo']) && empty($_POST['codTipo']) == false) {
        if (isset($_POST['descricao']) && empty($_POST['descricao']) == false) {
            $nome = addslashes($_POST['nome']);
            $descricao = addslashes($_POST['descricao']);
            $codTipo = addslashes($_POST['codTipo']);
            $sql = "INSERT INTO planta SET nome = '$nome', descricao = '$descricao', codTipo = '$codTipo'";
            $pdo->query($sql);

        }
    } else {
        echo '<p>Algo de errado aconteceu</p>';
    }
    header('Location: index1.php');
}

?>
<form class="form-horizontal" method="POST">
    <div class="form-group">
        <label for="inputUser" class="col-sm-1 control-label">Nome</label>
        <div class="col-sm-6">
            <input type="text" name="nome" class="form-control" id="inputUser3" placeholder="Digite seu nome">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-1 control-label">Comentario</label>
        <div class="col-sm-6">
            <textarea type="text" class="form-control" id="inputEmail3" placeholder="Descricao" name="descricao">Comentario</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPostagem" class="col-sm-1 control-label">Postagem</label>
        <div class="col-sm-9">
            <input type="text" name="codTipo" class="form-control" rows="3" placeholder="Codigo do Tipo">
        </div>
    </div>
    <div class="form-group">
        <div class="text-right col-sm-10">
            <button type="submit" class="btn btn-success btn-lg">Postar</button>
        </div>
    </div>
</form>