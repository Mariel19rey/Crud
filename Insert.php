# Crud
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escuela";

$id=$_POST['id'];
$color=$_POST['color'];
$material=$_POST['material'];
$marca=$_POST['marca'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pupitres(id,color,material,marca)
VALUES ('".$id."', '".$color."', '".$material."', '".$marca."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
    <head> </head>
    <body>

<form action="pupitresinsert.php" method="POST">
    Ingrese su id:
    <input type="text" name="id">
    <br>
    Ingrese el color:
    <input type="text" name="color">
    <br>
    <br>
    Ingrese el material:
    <input type="text" name="material">
    <br>
    Ingrese la marca:
    <input type="text" name="marca">
    <br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
