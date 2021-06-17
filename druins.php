<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $Nazwa = $_POST['Nazwa'];
    $Stadion_domowy = $_POST['Stadion_domowy'];

    $insert = mysqli_query($conn,"INSERT INTO `druzyny`(Nazwa, Stadion_domowy) VALUES ('$Nazwa','$Stadion_domowy')");
}

mysqli_close($conn); // Close connection
header('refresh: 0; url=dru.php');
?>





