<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $Imie = $_POST['Imie'];
    $Nazwisko = $_POST['Nazwisko'];
    $Wiek = $_POST['Wiek'];

    $insert = mysqli_query($conn,"INSERT INTO `sedziowie`(Imie, Nazwisko, Wiek) VALUES ('$Imie','$Nazwisko','$Wiek')");
}

mysqli_close($conn); // Close connection
header('refresh: 0; url=sed.php');
?>


