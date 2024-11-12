<?php
$bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
$tt = $bdd->query("SELECT * from membre");
$aa = $tt->fetch();
if(isset($_POST["valide"])){
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date = $_POST["date"];
$genre = $_POST["genre"];
$ville = $_POST["ville"];
$mail = $_POST["mail"];
$mdp = PASSWORD_HASH($_POST["mdp"],PASSWORD_DEFAULT);
$insertUserOnWebsite = $bdd->query("INSERT INTO membre (nom, prenom, date_naissance,genre,ville,email,mdp) VALUES('$nom','$prenom','$date','$genre','$ville','$mail','$mdp')");
header('Location: http://localhost:8800/vues/moncompte.php?mail:'.$mail.'');
}

?>