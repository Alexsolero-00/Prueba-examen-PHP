<?php
$servername = "localhost";
$database = "pruebas";
$username = "php";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("ERROR CONECTANDO: " . mysqli_connect_error());
}
 
$cod=$_GET["fcod"];
$desc=$_GET["fdesc"];
$precio=$_GET["fprecio"];


$sql = "INSERT INTO productos (cod, descripcion, precio) VALUES ('$cod','$desc', '$precio')";
if (mysqli_query($conn, $sql)) {
      echo "El nuevo campo a sido añadido";
} else {
      echo "ERROR INSERTANDO: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>