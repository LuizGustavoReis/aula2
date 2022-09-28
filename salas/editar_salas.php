<?php include "../layout/cabecalho.php"; ?>


<?php

$dados = file_get_contents("https://reserva.fatectq.edu.br/API/salas/ById/" . $_GET["Id"]);
$dados = json_decode($dados, true);



if (isset($_GET["Id"]) && !empty($_GET["Id"])) {
    echo "<h1>id=" . $_GET["Id"] ."</h1>";

    //echo "<pre>";
    //print_r($dados);
    //echo "</pre>";
} else {
    echo "<script>window.location.href='./salas.php?erro=semid'</script>";
}
?>
<div class="row">
    <div class="col-4 offset-4">
      <form>
          <div class="form-group">

          <label>id</label>
          <input type="text" name="salaId" readonly="readonly" value="<?php echo $dados["salaId"];?>"
          class="form-control"/>

          </div>
          <div class="form-group">

          <label>nome</label>
          <input type="text" name="nome" readonly="readonly" value="<?php echo $dados["nome"];?>"
          class="form-control"/>

          </div>

          <div class="form-group">

          <label>descrição</label>
          <input type="text" name="descricao" readonly="readonly" value="<?php echo $dados["descricao"];?>"
          class="form-control"/>

          </div>
          <div class="form-group">

          <label>bloco</label>
          <input type="text" name="bloco" readonly="readonly" value="<?php echo $dados["bloco"];?>"
          class="form-control"/>

          </div>
          <div class="form-group">

          <label>capacidade</label>
          <input type="text" name="capacidade" readonly="readonly" value="<?php echo $dados["capacidade"];?>"
          class="form-control"/>

          </div>
          <div class="form-group">

          <label>reservar</label>
          <input type="checkbox" name="permitirReserva" readonly="readonly" value="<?php echo $dados["permitirReserva"];?>"
          class="form-control"/>

          </div>
          <div class = "form- group mt-3">
              <button class="btn btn-succes" type="submit">Salvar sala</button>



          </div>
      </form>
    </div>
</div>












<?php include "../layout/rodape.php"; ?>