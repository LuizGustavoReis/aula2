<?php
  
 $numeros = array();
 $cont_pares=0;
 $cont_impar=0;
 $cont_negativo =0;
 $cont_positivo =0;
  for($i = 0; $i<10; $i++){
      $numeros[$i]=rand(-10,10);
      if($numeros[$i]% 2 == 0){
       $cont_pares++;
      }else{
          $cont_impar++;

       }
       if($numeros[$i]<0){
           $cont_negativo++;
       }else{
           $cont_positivo++;
       }
  }
  echo "<p>";
  echo "pares: " .$cont_pares. " impares: " .$cont_impar."<br>";
  echo "positivos: ".$cont_positivo. " negativos: ".$cont_negativo."<br>";
  echo "</p>";

  //função
  function ImprimeArray($array){
      echo"<p>";
      for($i =0;$i < count($array);$i++){
          echo "indice ".$i." valor ".$array[$i]."<br>";
      }
      echo"<p>";
  }
  ImprimeArray($numeros);

  







   /* taboada do 8
   for ($i = 1; $i <= 10; $i++) {
    echo "8x",$i,"= ",8*$i,"<br>";
  }
 */


 /*
    for($i =10 ; $i <=50; $i++){
        if($i % 2 == 1){
            echo $i,"<br>";
        }
    } 
   
 */

?>

<h3> taboada do 8 </h3>
<?php

for ($i = 1; $i <= 10; $i++) {
    echo "8x",$i,"= ",(8*$i),"<br>";
  }

?>

<h3>faça uma função que some todos os impares de 10 a 50 e exiba na tela.</h3>
<?php
$soma =0;
function ImprimirImpares($inicial,$final){
    $soma =0;
    for($i = $inicial; $i <= $final;$i++){
        if($i % 2 ==1){
            $soma += $i;
            
        }
    }
    echo $soma;
}
ImprimirImpares(10,50);
?>
<h3>faça uma função que calcule a porcentagem de um numero</h3>
<?php
function porcentagem($numero,$porcentagem){
    echo $porcentagem. " % de ". $numero." é ".(($numero/100)* $porcentagem); 
}
porcentagem(100,25)

?>
<h3>gere um array com numeros randomicos (rand(-50 50)) e ordene em ordem cresente</h3>
<?php

function gerarArrayAleatorio($qtdindice){
    $array = array();
    for($i =0; $i <=$qtdindice;$i++){
        array_push($array,rand(-50,50));
    }
    return $array;
}
$novo_array =gerarArrayAleatorio(50);
ImprimeArray($novo_array);

function ordenacaoCresente($array){

    $tamanho = count($array)-1;
    $auxiliar =0;

    for($i = 0; $i<$tamanho; $i++){

        for($j =0; $j<$tamanho-$i;$j++){

            if($array[$j]> $array[$j + 1]){
                $auxiliar = $array[$j];
                $array[$j] = $array[$j +1];   
                $array[$j + 1] = $auxiliar;         
            }
        
        }
        
    }
    return $array;
}
echo "antes<br>" ; ImprimeArray($novo_array);
$arrayOrdenado = ordenacaoCresente($novo_array);
echo "<br>depois de ordenar<br>"; ImprimeArray($arrayOrdenado);


?>