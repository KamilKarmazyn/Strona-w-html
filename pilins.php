<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $Druzyny = $_POST['Druzyny'];
    $Imie = $_POST['Imie'];
    $Nazwisko = $_POST['Nazwisko'];
    $Wiek = $_POST['Wiek'];
    $Pozycja = $_POST['Pozycja'];

    $insert = mysqli_query($conn,"INSERT INTO `pilkarze`(Druzyny,Imie,Nazwisko,Wiek,Pozycja) VALUES ('$Druzyny','$Imie','$Nazwisko','$Wiek','$Pozycja')");
}

mysqli_close($conn); // Close connection
header('refresh: 0; url=pil.php');
?>


