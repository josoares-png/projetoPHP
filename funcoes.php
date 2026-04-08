<?php
   //criando uma funções em php sem parâmetro
   function somaValor(){
   	echo "Somando....";
   }

   //criando uma função em php com parâmetro
   function imprimirNome($nome){
   	echo " <br/> Ola $nome";
   }

   function soma ($num1 , $num2){
   	return ($num1 + $num2);
   }
   
   //executando a função
   somaValor();
   imprimirNome("Jovanna");
   echo ("<br/>");
   $resultado = soma (10.50, 20.0);
   echo ("O resultado da soma: $resultado");
   echo "<br/> O resultado direto chamando a função:" . soma(30,50) + soma(10.50,20.35);

   

 ?>