<?php include "./cabecalho.php";?>
<h1>veja nossos produtos</h1>



<?php
if( !empty($_POST) && isset($_POST) ) 
{
    if(  empty($_POST["qtestoque"])  )
    {
        ?>
        <div class= "alert alert-danger">
       o campo quantidade deve ser preenchido
       </div>
       <?php
    }
    else if(empty($_POST["valor"]))
    {
        ?>
        <div class= "alert alert-danger">
       o campo valor deve ser preenchido
       </div>
       <?php
    }else {
        ?>
        
        <table >
    <tr>
        <th>
            <?php echo $_GET["nome"];?>
            
        </th>
        <th>Verduras</th>
        <th>Grãos</th>
    </tr>
        <?php
        

    }
    
  
    
   
}




?>


<form action ="./produtos.php" method="post">
<div class="form-group col-4 offset-4">
    <label>quantidade</label>
    <input type ="text" name="qtestoque" class="form-control"/>
</div>

<div class="form-group col-4 offset-4">
    <label>valor</label>
    <input type ="text" require name="valor" class="form-control"/>
</div>
<div class="form-group col-4 offset-4">
<label>Descrição</label>
<textarea class="form-control" name="descricao"></textarea>
</div>
<br>

<button class = "btn btn-warning" types="sibmit">
    enviar dados
</button>








<?php include "./rodape.php";?>