<?php 
   $nome = "Marie"; //variável local no script

   //implementção de uma função 

   function exibir(){
   	$nome = "João"; //variável local na função

   	echo "Valor da variável dentro da função " . $nome;
   }

   exibir(); //chamada da função

   echo "<br/> Valor da variável fora da função " . $nome;


 ?>