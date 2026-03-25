<?php 
   
     echo "A média dos alunos da classe<br/><br/>";
   
   //ALUNO 1
   $Aluno1_nota1 = 9;
   $Aluno1_nota2 = 8;

   $media = ($Aluno1_nota1 + $Aluno1_nota2) / 2;

   for ($i=6; $i 0  ; $i++) { 
      echo "Aluno 1 <br/> $media <br/>";
   if($media <= 3.0){
    $totalReprovado++;
    echo "REPROVADO";
   }else if($media <= 7.0){
    $totalExame++;
    echo "EXAME";
   }else{
    $totalAprovados++;
    echo "APROVADO <br/><br/>";
   }
   }

 ?>