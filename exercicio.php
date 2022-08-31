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
          echo "indice".$i."valor".$array[$i]."<br>";
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