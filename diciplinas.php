<?php include "cabecalho.php"; ?>


<?php
//pegando informaçoes da API
$dados = file_get_contents("https://reserva.fatectq.edu.br/API/DISCIPLINAS");
//corvertendo as imformaçoes 
$dados = json_decode($dados, true);

if(isset($_GET["erro"])&& $_GET["erro"]=="semid"){
    ?>

    <div class="alert alert-danger mt-4">
        Selecione uma diciplina para editar 
    </div>
 <?php
    
}
?>



<div class="row">
    <div class="col-8 offset-2">
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
                            <a class="btn btn-warning" href="./editar_diciplina.php?Id=<?php echo $dados[$i]["disciplinaId"]; ?>"
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







echo "<pre>";
print_r($dados);
echo "</pre>";

?>




<?php include "rodape.php"; ?>