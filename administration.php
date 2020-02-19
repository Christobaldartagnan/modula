<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=" stylesheet " href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel=" icon " type="image / x - icon " href="favicon.ico">
    <link rel="stylesheet" href="https: //use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title> Hello, world! </title>
</head>
<body class="jumbotron ">

<?php
include("menu.php");
?>
    <br>
<h1>Liste des contacts</h1>
<br>

<?php




    try
{
	$bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM formulaires order By dat DESC');

while ($donnees = $reponse->fetch())
{
?>
    <ul>
    
        <li>
<div class="accordion" id="accordionExample">
        <div class="card">
        <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <strong><?php echo $donnees['dat']; ?></strong> : <?php echo $donnees['email']; ?><br />
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
           Nom : <?php echo $donnees['nom']; ?>,Prénom : <?php echo $donnees['prenom']; ?>, IP :<?php echo $donnees['ip']; ?> !<br />
           Message  : <?php  echo $donnees['messages'];?>
      </div>
    </div>
  </div>
  </div> 
 </div>
</li>

   </ul>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête








?>
</body>
<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity ="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin ="anonymous"></script> 
<script src ="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity ="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin ="anonymous"></script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin ="anonymous" >
</script>
</body >
</html>