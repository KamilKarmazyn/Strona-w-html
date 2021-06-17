<!DOCTYPE HTML>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kamil Karmazyn">
    <title>Witaj na stronie logowania: NASZA PIŁKA</title>
    

    <!-- Bootstrap core CSS -->
<link href="./Signin Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">   


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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
      <link href="./Signin Template · Bootstrap v5.0_files/signin.css" rel="stylesheet">
</head>

<body class="text-center container p-5"style="background-image: url('A.jpg');"> 

    <main class="form-signin container p-5">
      <form>
        <img class="mb-4" src="./zdjęcia/piłka-braktla.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Zaloguj się</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control" id="login" placeholder="Nazwa użytkownika">
          <label for="floatingInput">Nazwa Użytkownika</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="pass" placeholder="Hasło">
          <label for="floatingPassword">Hasło</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="logi();">Zaloguj się</button>
       
    </form>
      
</body>
<script> 
function logi()
{
  var login = document.getElementById("login").value;
  var pass = document.getElementById("pass").value;
  if(login=="admin"&& pass=="lubieplacki")
  {
    window.open('sta.php', '_blank');
  }
  else{
  alert("Prosze wpisać poprawne dane");  
      }
}



</script>
</html>