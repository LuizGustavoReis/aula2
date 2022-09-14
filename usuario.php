<?php include "./cabecalho.php";?>
<h1>lista de usuarios </h1>
<!--criando um formulario-->

<form action="./produtos.php" method="get">
<div class="form-group col-4">
<label>nome</label>
<input type="text" 
class="form-control" 
name="nome"/>
</div>

<div class="form-group col-4">
<label>Endereço</label>
<input type="text" 
class="form-control" 
name="endereço"/>
</div>

<div class="form-group col-4">
<label>CPF</label>
<input type="text" 
class="form-control" 
name="cpf"/>
</div>



<button type="submit" class="btn btn-success">
    enviar
</button>
<?php include "./rodape.php";?>