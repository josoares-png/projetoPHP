<?php 
  
   echo "A média dos alunos da classe<br/><br/>";
   
   $nota1 = 10;
   $nota2 = 10;

    for ($nota1=1; $nota1<=6 ; $nota1++) { 

   $media = ($nota1 + $nota2) / 2;

   if($media <= 3.0){
      echo "REPROVADO <br/><br/>";
   }else if($media <= 7.0){
      echo "EXAME<br/><br/>";
   }else{
      echo "APROVADO <br/><br/>";
   } 

    }
 ?> 