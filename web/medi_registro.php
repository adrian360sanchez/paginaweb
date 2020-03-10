<?php 

  $servidor="localhost";
  $usuario="adrian";
  $clave="monokuba360";
  $db="himedic";

 // $enlace = mysqli_connect("127.0.0.1", "root", "monokuba360", "himedic");
  //$obj_conexion = mysqli_connect($servidor, $usuario, $clave, $db);

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$db", $usuario,'monokuba');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conecion correcta";
    echo "<body  style='background-color: #09F7E2 ;'>";
     echo "<center><h1>tu usuario a sido agregado</h1></center>";
     echo "<br><br>";
     echo "<center><a href='index.html'><input type='button' value='inicio'></a></center>";

}catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
}



  $usu=$_POST['num'];
  $contra=$_POST['pass'];
  $confcontra=$_POST['conpass'];
  $cifrar=md5($contra);
  $cifrar2=md5($confcontra);

   $query="insert into registro values('$usu','$cifrar','$cifrar2')";
 // $query="insert into registro values(7774462087,'qwerty','qwerty')";
  
  
    if($conn->exec($query) === false){
        $msg = 'Error inserting the department.';
        return false;
    }else{
        $msg = "tu usuario a sido creado";
      return true;
    }
     
$conn.close();
    
        
?>