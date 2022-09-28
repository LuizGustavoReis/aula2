<?php include "../layout/cabecalho.php"; ?>


<?php
if(isset($_GET["busca"] ) && !empty($_GET["busca"])){
    $dados = file_get_contents("https://reserva.fatectq.edu.br/API/DISCIPLINAS/busca/".$_GET["busca"]);
    $dados = json_decode($dados, true);

}else{
//pegando informaçoes da API
$dados = file_get_contents("https://reserva.fatectq.edu.br/API/DISCIPLINAS");
//corvertendo as imformaçoes 
$dados = json_decode($dados, true);
}

if(isset($_GET["erro"])&& $_GET["erro"]=="semid"){
    ?>

    <div class="alert alert-danger mt-4">
        Selecione uma diciplina para editar 
    </div>
 <?php
    
}
?>



<div class="row">
    <div class="col-10offset-1">

      <div class="card">
          <div class="card-header">Lista de disciplina</div>
          <div class= "card-body">
          <form action="./diciplinas.php" method="get">
              <div class="row">
                 
                  <div class="col-3">
                      <a class="btn btn-succes">
                          nova Diciplina
                      </a>
                  </div>
                  <div class="col-4">
                      <input type="text" name="busca" class="form-control"/>
                  </div>
                  <div class="col-2">
                      <button type="submit" class="btn btn-primary">pesquisar</button>
                  </div>
              </div>
                  </form>
              </div>
          </div>

      </div>
        <table class="table table-hover table-striped">

            <thead>





            </thead>

            <tbody>

                <?php
                for ($i = 0; $i < count($dados); $i++) {
                ?>
                    <tr>

                        <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                        <td><?php echo $dados[$i]["nome"]; ?></td>
                        <td><?php echo $dados[$i]["sigla"]; ?></td>
                        <td><?php echo $dados[$i]["apelido"]; ?></td>

                        <td>
                        <td>
                            <a class="btn btn-warning" href="editar_diciplina.php?Id=<?php echo $dados[$i]["disciplinaId"]; ?>"
                            >Editar</a>


                        </td>
                        </td>

                        <td>
                        <td>
                            <a class="btn btn-danger">Excluir</a>
                        </td>


                        </td>




                    </tr>


                <?php

                }
                ?>





                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>




                </tr>
            </tbody>



        </table>

    </div>

</div>



<?php
// echo "<h1>".$dados[0]["nome"]."</h1>";









?>




<?php include "../layout/rodape.php"; ?>