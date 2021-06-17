<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $Drużyny = $_POST['Drużyny'];
    $Nazwa = $_POST['Nazwa'];
    $Liczba_miejsc = $_POST['Liczba_miejsc'];
    $Adres = $_POST['Adres'];
    $Miasto = $_POST['Miasto'];

    $insert = mysqli_query($conn,"INSERT INTO `stadion`(Drużyny,Nazwa,Liczba_miejsc,Adres,Miasto) VALUES ('$Drużyny','$Nazwa','$Liczba_miejsc','$Adres','$Miasto')");
}

mysqli_close($conn); // Close connection
header('refresh: 0; url=Sta.php');
?>


