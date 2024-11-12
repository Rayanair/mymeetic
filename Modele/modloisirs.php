<?php 
class ModLoisir {
    function loi($mail,$prenom,$loisir1,$loisir2,$loisir3,$loisir4,$loisir5) {
        $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
        $lid = $bdd->query("SELECT id from membre where email = '$mail'");
        $id = $lid->fetch();
        $loisireu = $bdd->query("INSERT into membre_loisirs (id_loisirs,id_membre) values($loisir1,$id[0])");
        $loisireu = $bdd->query("INSERT into membre_loisirs (id_loisirs,id_membre) values($loisir2,$id[0])");
        $loisireu = $bdd->query("INSERT into membre_loisirs (id_loisirs,id_membre) values($loisir3,$id[0])");
        $loisireu = $bdd->query("INSERT into membre_loisirs (id_loisirs,id_membre) values($loisir4,$id[0])");
        $loisireu = $bdd->query("INSERT into membre_loisirs (id_loisirs,id_membre) values($loisir5,$id[0])");
    }

    function genre($mail,$genre){
        $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
        $lid = $bdd->query("UPDATE membre SET elgato = '$genre' WHERE email ='$mail'");
    }


}