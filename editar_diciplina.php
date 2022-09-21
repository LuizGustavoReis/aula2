<?php include "cabecalho.php"; ?>


<?php

$dados = file_get_contents("https://reserva.fatectq.edu.br/API/DISCIPLINAS/ById/" . $_GET["Id"]);
$dados = json_decode($dados, true);



if (isset($_GET["Id"]) && !empty($_GET["Id"])) {
    echo "<h1>id=" . $_GET["Id"] ."</h1>";

    //echo "<pre>";
    //print_r($dados);
    //echo "</pre>";
} else {
    echo "<script>window.location.href='./diciplinas.php?erro=semid'</script>";
}
?>
<div class="row">
    <div class="col-4 offset-4">
      <form>
          <div class="form-group">

          <label>id</label>
          <input type="text" name="Id" readonly="readonly" value="<?php echo $dados["disciplinaId"];?>"
          class="form-control"/>

          </div>
          <div class="form-group">

          <label>nome</label>
          <input type="text" name="nome" readonly="readonly" value="<?php echo $dados["nome"];?>"
          class="form-control"/>

          </div>

          <div class="form-group">

          <label>sigla</label>
          <input type="text" name="sigla" readonly="readonly" value="<?php echo $dados["sigla"];?>"
          class="form-control"/>

          </div>
          <div class="form-group">

          <label>apelido</label>
          <input type="text" name="apelido" readonly="readonly" value="<?php echo $dados["apelido"];?>"
          class="form-control"/>

          </div>
          <div class = "form- group mt-3">
              <button class="btn btn-succes" type="submit">Salvar Diciplina</button>



          </div>
      </form>
    </div>
</div>












<?php include "rodape.php"; ?>