<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $Druzyny = $_POST['Druzyny'];
    $Imie = $_POST['Imie'];
    $Nazwisko = $_POST['Nazwisko'];
    $Wiek = $_POST['Wiek'];

    $insert = mysqli_query($conn,"INSERT INTO `trenerzy`(Druzyny,Imie,Nazwisko,Wiek) VALUES ('$Druzyny','$Imie','$Nazwisko','$Wiek')");
}

mysqli_close($conn); // Close connection
header('refresh: 0; url=tre.php');
?>
