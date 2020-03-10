<?php 

	$servidor="127.0.0.1";
	$usuario="adrian";
	$clave="adrian";
	$db="zzy_adrian";
	$conexion=pg_pconnect("host=$servidor user=$usuario password=$clave port=5432 dbname=$db") OR die("No es posible conectar con $base en $servidor");

	$usu=$_POST['user'];
  $contra=$_POST['pass'];
  $verificontra=$_POST['conpass'];
  $cifrar=md5($contra, $conpass);

   $query="insert into registro values('$usu','$cifrar', $verificontra)";
  
      $res=pg_exec($conexion,$query);

     echo "<body background='fondo6.jpg'>";
     echo "<center><h1>tu usuario a sido agregado</h1></center>";
     echo "<br><br>";
    
        
?>