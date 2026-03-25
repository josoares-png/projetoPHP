<?php 
  
   echo "A média dos alunos da classe<br/><br/>";
   
   //ALUNO 1
   $Aluno1_nota1 = 9;
   $Aluno1_nota2 = 8;

   $media = ($Aluno1_nota1 + $Aluno1_nota2) / 2;

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

   //ALUNO 2
   $Aluno2_nota1 = 6;
   $Aluno2_nota2 = 5;

   $media = ($Aluno2_nota1 + $Aluno2_nota2) / 2;

   echo "Aluno 2 <br/> $media <br/>";
   if($media <= 3.0){
   	$totalReprovado++;
   	echo "REPROVADO";
   }else if ($media <= 7.0){
   	$totalExame++;
   	echo "EXAME <br/><br/>"; 
   }else{
   	$totalAprovados++;
   	"APROVADO ";
   }

   //ALUNO 3

    $Aluno3_nota1 = 8;
    $Aluno3_nota2 = 4;

    $media = ($Aluno3_nota1 + $Aluno3_nota2) / 2;

    echo "Aluno 3 <br/> $media <br/>";
    if($media <=3.0){
    	$totalReprovado++;
    	echo "REPROVADO";
    }else if ($media <= 7.0){
    	$totalExame++;
    	echo "EXAME <br/><br/>";
    }else{
    	$totalAprovados++;
    	echo "APROVADO";
    }


    $totalAprovados = 0 ;
    $totalReprovado = 0;
    $totalExame = 0; 

    echo "O total de alunos aprovados: $totalAprovados <br/>";
    echo "O toal de alunos reprovados: $totalReprovado <br/>";
    echo "O total de alunos de exame: $totalExame<br/>";


  


   
/*
     

   $Aluno3nota1 =;
   $Aluno3nota2 =;

   $Aluno4nota1 =;
   $Aluno4nota2 =;

   $Aluno5nota1 =;
   $Aluno5nota2 =;

   $Aluno6nota1 =;
   $Aluno6nota2 =;



 


    $totalAprovados =;
    $totalReprovado =;
    $totalExame; 
*/
 ?> 