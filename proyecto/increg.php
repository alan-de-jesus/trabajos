<?php
$servername = "localhost";
$database = "dlyp";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
$usuario=$_POST['usuar'];
$contraseña =$_POST['contra'];
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO usuari (id_usuario, usuario, contraseña) VALUES ('', '$usuario', '$contraseña')";
if (mysqli_query($conn, $sql)) {
      include ("home.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>