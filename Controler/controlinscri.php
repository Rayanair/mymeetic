<?php
require "../Modele/modinscription.php";
class controlInsc {
    public function inscription() {
        if(isset($_POST["valide"])){
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $date = $_POST["date"];
            $genre = $_POST["genre"];
            $ville = $_POST["ville"];
            $mail = $_POST["mail"];
            $mdp = PASSWORD_HASH($_POST["mdp"],PASSWORD_DEFAULT);
            if($date >= 18){
                $z = new ModInsc();
            $z->insc($nom,$prenom,$date,$genre,$ville,$mail,$mdp);
            header('Location: http://localhost:8800/vues/loisirs.php?mail='.$mail.'&prenom='.$prenom.'');
            }else{
                echo "Trop jeune";
            }
    }
}
}
$r = new controlInsc();
$r->inscription();
?>