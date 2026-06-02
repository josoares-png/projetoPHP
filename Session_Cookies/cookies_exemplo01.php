<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testanto se o cookie foi definido</title>
</head>
<body>
<?php 

    setcookie("usuarios","etecia",time()+86400);

    setcookie("admin","user_admin",time()+86400);

     //echo $_COOKIE['usuarios'] . "<br>";
    //$admin = $_COOKIE['admin'];

    //if (isset($_COOKIE['usuarios'])) {
    	//echo "Bem vindo ".$_COOKIE['usuarios'] . "! <br>";
    //}else{
    	//echo "Usuário novo, seja brm vindo! <br>";
    //}
 ?>
</body>
</html>
<?php 

  $value = 'aluno';

  setcookie ("Ocupação", $value);

  setcookie ("Ocupação", $value, time()+60);


 ?>





