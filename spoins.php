<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $Dataspotk = $_POST['Dataspotk'];
    $Czas = $_POST['Czas'];
    $Stadion = $_POST['Stadion'];
    $Sedziowie = $_POST['Sedziowie'];
    $Gospodarze = $_POST['Gospodarze'];
    $Goscie = $_POST['Goscie'];
    $Wynik = $_POST['Wynik'];

    $insert = mysqli_query($conn,"INSERT INTO `spotkania`(Dataspotk,Czas,Stadion,Sedziowie,Gospodarze,Goscie,Wynik) VALUES ('$Dataspotk','$Czas','$Stadion','$Sedziowie','$Gospodarze','$Goscie','$Wynik')");
}

mysqli_close($conn); // Close connection
header('refresh: 0; url=spo.php');
?>
