<?php 
class ModInsc {
    function insc($nom,$prenom,$date,$genre,$ville,$mail,$mdp) {
            $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
            $insertUserOnWebsite = $bdd->query("INSERT INTO membre (nom, prenom, date_naissance,genre,ville,email,mdp) VALUES('$nom','$prenom',$date,'$genre','$ville','$mail','$mdp')");
    }
}