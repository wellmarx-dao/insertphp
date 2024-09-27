<?php

/**
 * modal en PHP y MySQL
 
 * 
 */
 $servername = "";
 $database = "";
 $username = "";
 $password = "";
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Check connection
 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 } 
 echo "Connected successfully";

 $nombre=$_POST['nombre'];
 $whatsapp=$_POST['whatsapp'];
 $mail=$_POST['mail'];

 $sql = "INSERT INTO registro (nombre, whatsapp, mail) VALUES ('$nombre','$whatsapp','$mail')";
 if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
 } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
 header('Location: https://www.kmaxdivergente.com/Album_Divergente/Divergente.zip');
 ?>






