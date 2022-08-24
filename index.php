<?php



/*echo "Meu nome e jonny"; //a função echo escreve qualquer texto na tela (ja e nativa)
echo "<h1> função nativa echo</h1>";
echo "<br>";
echo "bem vindo";

//Varivel 
echo "<h4></h4>";
$nota1 = 7.5;
$nota2 = 8;
$texto = "minha media e:";
$resultado = ($nota1.$nota2)/2;

$texto = $texto.$resultado;


echo $texto;

Estrutura de repetição 

if ($resultado >= 6)
{
    echo "aprovado";
}
else if ($resultado <6 && $resultado >=2)
{
echo "tem chance de recuperar";
}
else{
    echo "reprovado, perdido";
}
$contadora = 0;
do{
echo "<br>teste".$contadora;
$contadora ++;

}while($contadora < 10);
//echo "<BR><BR>degub:".$resultado."<BR><BR><br>";

/*echo "while:<br>";
while($contadora < 150)
{
    if($contadora % 2 == 0){
        echo $contadora."e numero par<br>";
    
    }else{
        echo "<p>".$contadora."E numero impar</p>";
    }
    $contadora++;
}
*/
/*
CONST teste = "oi";
for($i = 0; $i<1550; $i++)
{
    echo "<h1>".$i."<br>";
}
*/
//echo "<script>window.location.href = 'http//www.globo.com</script>'"
/*echo "<table border='5' style='padding:5px'>";
for($i=0; $i< 25; $i++){
    echo "<tr>";
    echo "<td>nome ".$i."</td>";
    echo "<td>idade ".$i."</td>";
    echo "</tr>";
}
echo "</table>";
*/

//iniciando um array em branco na variavel


//echo $lista;
//echo $lista[0]; n funcionará
//nao existe dados no indeci 0;

$nome = array("fernado","vitoria","denise","matheus","guilherme","roge","virlande");
//Acessando cada item do array manualmente 
/*echo $nome[0]."<br>";
echo $nome[1]."<br>";
echo $nome[2]."<br>";
echo $nome[3]."<br>";
echo $nome[4]."<br>";
echo $nome[5]."<br>";
echo $nome[6]."<br>";*/

    /*for($i = 0; $i< count($nome);$i++){
        echo $nome[$i]."<br>";
    }
*/
    $dados = array();
    $dados["nome"] = array("Luiz","maria","joao");
    $dados["idade"] = array(20, 18, 25);
    $dados["solteiro"] = array(true, false, false);

    for($i = 0; $i<10; $i++){
        array_push($dados,$i);
    }

    echo"<pre>";
    var_dump($dados);
    echo"</pre>";

    echo $dados[1] = "luiz es no indice 1";//atribuindo valor
    echo $dados[1];//imrpimindo novamente
 echo"<pre>";
    var_dump($dados);
    echo"</pre>";
/*
    $_POST["senha"];
    $_GET["id"];
    $_COOKIE["carrinho"];
    $_SESSION
    $_FILES
    */
    $array = mysqli_query("select nome, idade  from tabela");
    $listaBanco["nome"];


?>