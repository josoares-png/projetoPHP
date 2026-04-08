<?php 

   $num1 = 30;
   $num2 = 20;
   $op = 4 ;

  function soma($num1, $num2){
   	return ($num1 + $num2);
   }
    
  function subtracao($num1, $num2){
   	return ($num1 - $num2);
   }

  function multiplicacao($num1, $num2){
   	return($num1 * $num2);
   }

   function divisao($num1, $num2){
   	return($num1 / $num2);
   }
 
   switch ($op) {
   	case 1: 
   	$resp = soma ($num1, $num2) ;
   	$op = "Soma";
   		break;

    case 2:
    $resp = subtracao ($num1, $num2);
    $op = "Subtração";
    	break;	

   	case 3:
   	 $resp = multiplicacao($num1, $num2);
   	 $op = "Multiplicação";
   		break;


   	case 4: 
   		$resp = divisao($num1, $num2);
   		$op = "Divisão";
   		break;

   	default:
   		echo ("Sair");
   		break;
   }


   echo "A $op do $num1 e $num2 = $resp";	
   
 ?>