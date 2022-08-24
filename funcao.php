<?php
function nomefuncao(){
    if(true){
        echo "funcionando a função";
    }else{
        echo "nunca vai cair aqui";
    }
}
function adicao($num1,$num2){
    $soma = $num1+ $num2 + 2;
    return $soma;
}
function subtracao($num1,$num2){
    $resultado = $num1 - $num2;
    return $resultado;
}
function multiplicacao($num1,$num2){
    $resultado = $num1 * $num2;
    return $resultado;
}

function divisao($num1,$num2){
    $resultado = $num1 / $num2;
    return $resultado;
}

function somaArry($array){
    $retorno = 0;
    for($i = 0; $i < count($array); $i++){
        $retorno += $array[$i];
    }
    return $retorno;
}

function mediaArray($array){

    $soma = somaArry($array);

    return $soma/count($array);
}

function media($num1,$num2){
    $resultado = ($num1 + $num2) /2 ;
    return $resultado;
}



function lendariacalculadora($numero1,$numero2,$operacao){
    echo "<br>";
    if($operacao == "+"){
        echo adicao($numero1,$numero2);
    }
    
    else if ($operacao == "-"){
        echo subtracao($numero1,$numero2);
    }
    
    else if  ($operacao == "*"){
        echo multiplicacao($numero1,$numero2);
    }
    
    else if ($operacao == "/"){
        echo divisao($numero1,$numero2);
        
    }

    else if ($operacao == "m"){
        echo media($numero1,$numero2);
        
    }
    
    else{
        echo "digite uma operação valida";
    }
}
/*//nomefuncao();
$valor1 = 512;
$resultado = adicao($valor1,2);
echo "primeira adição:". adicao(254464,4464148)."<br>";
echo "o resultado da soma é :".$resultado;
*/
//$resultado = multiplicacao(10,10);
//echo "o resultado da multiplicação e:". $resultado;
/*$numeros = array(1,5,10,15,20,25);
echo somaArry($numeros);*/

/*lendariacalculadora(8,6,"*");
lendariacalculadora(8,6,"/");
lendariacalculadora(8,6,"+");
lendariacalculadora(8,6,"m");*/
//lendariacalculadora(8,6,"ljvfafjpafjapjf");
$numero =array(6,8);
echo mediaArray($numero);


?>