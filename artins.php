<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $Nazwa = $_POST['Nazwa'];
    $Tag = $_POST['Tag'];
    $Tresc = $_POST['Tresc'];
    $Datka = $_POST['Datka'];


    $insert = mysqli_query($conn,"INSERT INTO `artykuly`(Nazwa,Tag,Tresc,Datka) VALUES ('$Nazwa','$Tag','$Tresc','$Datka')");
}

mysqli_close($conn); // Close connection
header('refresh: 0; url=indexadm.php');
?>


