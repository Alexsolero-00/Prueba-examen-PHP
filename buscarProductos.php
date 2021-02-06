<?php
$servername = "localhost";
$database = "pruebas";
$username = "php";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("ERROR: " . $conn->connect_error);
}

$op=$_GET["opcion"];

$texto=$_GET["ftext"];

$sql = "SELECT * FROM productos where";

if ($_GET["opcion"]=="ocod") 
{

	$sql = $sql." cod=$texto";

}
elseif ($_GET["opcion"]=="odesc")
{

	$sql = $sql." descripcion like '%$texto%'";

}
elseif ($_GET["opcion"]=="opre")
{

	$sql = $sql." precio<=$texto";

}
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<br> Codigo: ". $row["cod"]. " - Descipcion: ". $row["descripcion"]. " - Precio " . $row["precio"] . "<br>";
	    }
	} else {
	    echo "0 resultados";
	}

	$conn->close();
?>