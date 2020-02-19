
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO formulaires(ip, nom, prenom, email, messages, rgpd,dat) VALUES(?,?,?,?,?,?,?)');
$req->execute(array(
    htmlspecialchars($_POST["ip"]) ,
	 htmlspecialchars($_POST["nom"]),
	 htmlspecialchars($_POST["prenom"]),
	 htmlspecialchars($_POST["email"]),
	 htmlspecialchars($_POST["messages"]),
     htmlspecialchars( $_POST["rgpd"]),
     htmlspecialchars( $_POST["dat"])
    	
    ));
    ?>
<form action="formulaire.php" method="post">
    <input type="text" name="confirm" id="confirm" value="Demande de contact bien enregistrée !" hidden>
</form>
<?php
echo 'demande de contact faite par  '.htmlspecialchars($_POST["nom"]).' enregistrée !';

header("location: formulaire.php");

