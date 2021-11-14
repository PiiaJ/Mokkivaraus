<?php
$servername = "127.0.0.1:51188";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "mokkikalenteri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO varaukset (Varaaja_ID, Varaaja_Nimi, Alkaa, Loppuu, Lemmikki)
VALUES ('12345679', 'Matti', 'Meikäläinen','2022-1-1','2022-1-14','N')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>