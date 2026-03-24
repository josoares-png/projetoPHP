<?php 
   
  
  /* echo "Imposto de renda: <br/> ";
   echo "Porcentagem de desconto: <br/>";
   echo "Valor de desconto: <br/>";
   echo "Salário líquido: <br/>"; */


   $salB = 2800.00; 
   
   
   echo "Salário bruto: $salB <br/><br/>";

   echo "Tabela de Imposto de Renda<br/><br/>";



   if($salB <= 2428.80){
   	echo "Isento <br/>";
   }else if($salB >= 2428.81 && $salB <= 2826.65){
      $porc =   0.075;
      $desc = $salB * $porc;
      $salL = $salB - $desc;
   }else if()
      echo "Porcentagem de desconto: " .($porc * 100). "% <br/>";
      echo"Valor de desconto: R$ $desc <br/>";
      echo "Salário Líquido: R$ $salL";

   

 ?>
