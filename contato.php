<?php include "./layout/cabecalho.php";?>
<h1>entre em contato</h1>
<?php
if( !empty($_POST) && isset($_POST) ) 
{
    if(  empty($_POST["email"])  )
    {
        ?>
        <div class= "alert alert-danger">
       o campo email deve ser preenchido
       </div>
       <?php
    }
    else if(empty($_POST["nome"]))
    {
        ?>
        <div class= "alert alert-danger">
       o campo Nome deve ser preenchido
       </div>
       <?php
    }else {
        ?>
        <div class= "alert alert-success">
        sua reclamação foi enviada
        </div>
        <?php




    }
    
  
    
   
}


?>

<form action ="./contato.php" method="post">
<div class="form-group col-4 offset-4">
    <label>nome</label>
    <input type ="text" name="nome" class="form-control"/>
</div>

<div class="form-group col-4 offset-4">
    <label>email</label>
    <input type ="email" require name="email" class="form-control"/>
</div>
<div class="form-group col-4 offset-4">
<textarea class="form-control" name="obs"></textarea>
</div>
<br>

<button class = "btn btn-warning" types="sibmit">
    enviar dados
</button>






<?php include "./layout/rodape.php";?>