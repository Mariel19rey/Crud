# Crud
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escuela";
$id=$_GET['id'];
$color=$_GET['color'];
$material=$_GET['material'];
$marca=$_GET['marca'];

echo $id;
echo $color;
echo $material;
echo $marca;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE pupitres SET color='".$color."',material='".$material."',marca='".$marca."'WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
