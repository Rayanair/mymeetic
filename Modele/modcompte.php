<?php 
class ModCompte{
    function compte($mail,$mdp) {
            $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");

                $checkIfUserExist = $bdd->prepare('SELECT * FROM membre WHERE email = ?');
                $checkIfUserLoi = $bdd->prepare('SELECT * FROM membre inner join membre_loisirs on membre.id=membre_loisirs.id_membre inner join loisirs on loisirs.id=membre_loisirs.id_loisirs WHERE email = ?');
                $checkIfUserLoi-> execute(array($mail));
                $checkIfUserExist-> execute(array($mail));
                $userInfos = $checkIfUserExist->fetch();
                echo "<section class='profil'>";
                echo "<div class='oui'>";
                echo "<h1>Mes informations</h1>";
                echo "<p>Prénom : ".$userInfos[1]."</p>";
                echo "<p>Nom : ".$userInfos[2]."</p>";
                echo "<p>Age : ".$userInfos[3]."</p>";
                echo "<p>Genre : ".$userInfos[4]."</p>";
                echo "<p>Ville : ".$userInfos[5]."</p>";
                echo "<p>Mail : ".$userInfos[6]."</p>";
                echo "</div>";
                echo "<div>";
                echo "<h1>Mes loisirs</h1>";
                if($checkIfUserLoi->rowCount() > 0){
                    while($userloisirs = $checkIfUserLoi->fetch()){
                        echo "<p>".$userloisirs[14]."</p>";
                    }
                }
                echo "</div>";
                echo "</section>";
                
}               
}
?>

