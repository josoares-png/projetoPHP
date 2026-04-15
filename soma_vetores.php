<?php 

   $valor1 = array(10,20,30,40);

   $valor2 = array(50,60,70,80);

   $resultado = array();

  for ($i=0; $i <count($valor1) ; $i++) {
   	$resultado[$i] = $valor1[$i] + $valor2[$i];
   }

    echo "---------- <br>";
   for ($i=0; $i <sizeof($valor2) ; $i++) { 
    echo $resultado [$i] . "<br>";
   }
   

   





 ?>