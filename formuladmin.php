<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel=" stylesheet " href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel=" icon " type="image / x - icon " href="favicon.ico">
  <link rel="stylesheet" href="https: //use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title> Hello, world! </title>
</head>

<body class="jumbotron text-center">
  <?php
  include("menu.php");
  ?>
  <div class="jumbotron text-center">
    <h1> Formulaire Admin</h1>
  </div>
  <div class="alert alert-success" role="alert" id="alerte" style="visibility: hidden;"></div>
  <div class="container">
    <form action="administration.php" method="POST" id="formu">
      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" aria-describedby="login">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password">
      </div>

      <button type="submit" class="btn btn-primary" id="bouton">Submit</button>
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script>
    var bouton = document.getElementById("bouton");
    var alerte = document.getElementById("alerte");
    var formu = document.getElementById("formu");
    var login=document.getElementById('login');
    var mdp=document.getElementById('password');
    bouton.addEventListener("click", function(e) {

      e.preventDefault();
      if(login.value==='admin'&& mdp.value==='admin'){
        alerte.style.visibility = "visible";
      alerte.textContent = "connexion réussie !";
      setTimeout(() => {
        alerte.style.visibility = "hidden";
        formu.submit();

      }, 1000);}
      


    });
  </script>
</body>

</html>