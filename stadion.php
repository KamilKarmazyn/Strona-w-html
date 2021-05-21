<!DOCTYPE HTML>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Opis" content="Witaj na stronie poświęconej Polskiej Ekstraklasie">
    <meta name="Autor" content="Kamil Karmazyn">
    <title>NASZA PIŁKA</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
   <link href="./Blog Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap v5.0_files/css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap v5.0_files/blog.css" rel="stylesheet">
<body style="background-image: url('AB.jpg');">
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center" style="background-color:rgb(59, 57, 57);color: cornsilk;">
          <h1>NASZA PIŁKA</h1>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="link-secondary" href="" aria-label="Wyszukiwanie">
            <svg xmlns="" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Wyszukiwanie</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary"style="background-color: white;" href="login.php">Zaloguj się</a>
        </div>
      </div>
    </header>
  
    <div class="nav-scroller py-1 mb-2 ">
      <nav style="background-color:rgb(59, 57, 57);"
      class="nav d-flex justify-content-between back">
        <a style="color: honeydew;" class="p-1 link-secondary" href="index.php">Strona główna</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="Spotkania.php">Spotkania</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="druzyny.php">Drużyny</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="pilkarze.php">Piłkarze</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="trenerzy.php">Trenerzy</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="sedziowie.php">Sędziowie</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="stadion.php">Stadiony</a>
     </p>
      </nav>
    </div>
  </div>
  
  <main class="container" style="background-color: white;">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM stadion";
$result = $conn->query($sql);


echo'<table class="table">
  <thead>
    <tr>
      <th scope="col">DRUŻYNY</th>
      <th scope="col">NAZWA</th>
      <th scope="col">MIEJSCA</th>
      <th scope="col">ADRES</th>
      <th scope="col">MIASTO</th>

    </tr>
  </thead>
  <tbody>';

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo'<tr>
      <td>' . $row["Drużyny"]. '</td>
      <td>' . $row["Nazwa"]. '</td>
      <td>' . $row["Liczba_miejsc"]. '</td>
      <td>' . $row["Adres"]. '</td>
      <td>' . $row["Miasto"]. '</td>
    </tr>
    <tr>
    ';
  }

echo'
  </tbody>
</table>';

} else {
  echo "0 results";
}
$conn->close();
?>
 </main>
</body>

</html>










