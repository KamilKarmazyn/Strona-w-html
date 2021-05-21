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
$sql = "SELECT * FROM spotkania";
$result = $conn->query($sql);


echo'<table class="table">
  <thead>
    <tr>
      <th scope="col">DATA</th>
      <th scope="col">CZAS</th>
      <th scope="col">STADION</th>
      <th scope="col">SEDZIOWIE</th>
    </tr>
  </thead>
  <tbody>';

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo'<tr>
      <td>' . $row["Dataspotk"]. '</td>
      <td>' . $row["Czas"]. '</td>
      <td>' . $row["Stadion"]. '</td>
      <td>' . $row["Sedziowie"]. '</td>
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