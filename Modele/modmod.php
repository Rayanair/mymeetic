<?php 
class ModMod{
    function mod($mail,$mdp,$mail1,$prenom,$ville,$loisir1,$loisir2,$loisir3,$loisir4,$loisir5) {
            $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
            echo($mail);
            echo($mdp);
            echo($prenom);
            echo($ville);
            echo($mail1);
            echo($loisir1);
            $loisirs = $bdd->query("SELECT membre_loisirs.id from membre inner join membre_loisirs on membre_loisirs.id_membre=membre.id inner join loisirs on loisirs.id=membre_loisirs.id_loisirs where membre.email = '$mail1'"); 
            $user = $loisirs->fetch(); 
            echo($user[0]);
            $lol = $bdd->query("UPDATE membre_loisirs SET id_loisirs = $loisir1 where id = $user[0]");
    
                $lol = $bdd->query("UPDATE membre_loisirs SET id_loisirs = $loisir2 where id = $user[0]+1");
                $lol = $bdd->query("UPDATE membre_loisirs SET id_loisirs = $loisir3 where id = $user[0]+2");
                $lol = $bdd->query("UPDATE membre_loisirs SET id_loisirs = $loisir4 where id = $user[0]+3");
                $lol = $bdd->query("UPDATE membre_loisirs SET id_loisirs = $loisir5 where id = $user[0]+4");
    
            $checkIfUserExist = $bdd->query("UPDATE membre SET mdp = '$mdp', email = '$mail', ville = '$ville' WHERE email = '$mail1'"); 
            header('Location: http://localhost:8800/vues/moncompte.php?mail='.$mail.'&prenom='.$prenom.'');
}               
}
?>