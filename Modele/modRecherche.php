<?php 
class ModRech {
    function rech($genre,$ville,$loisirs,$age) {
        $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
        require "../vues/recherche.php";
        if($age == 1){
            $user = $bdd->query("SELECT * from membre inner join membre_loisirs on membre.id=membre_loisirs.id_membre inner join loisirs on loisirs.id=membre_loisirs.id_loisirs where membre.genre = '$genre' AND ville = '$ville' AND loisirs.id = $loisirs AND date_naissance BETWEEN 18  AND 25");
            if($user->rowCount() > 0){
                echo '<div class="_slider">';
                echo "<section class='elsection'>";
                while($userInfos = $user->fetch()){
                    echo "<section class='profiles'>";
                    echo "<div>";
                    echo "<h1>Informations</h1>";
                    echo "<p>Prénom : ".$userInfos[1]."</p>";
                    echo "<p>Nom : ".$userInfos[2]."</p>";
                    echo "<p>Age : ".$userInfos[3]."</p>";
                    echo "<p>Genre : ".$userInfos[4]."</p>";
                    echo "<p>Ville : ".$userInfos[5]."</p>";
                    echo "</div>";
                    echo "</section>";
                }
                echo "</section>";
                echo '<a href="#" class="_slider_next">&#10095;</a>';
                echo '<a href="#" class="_slider_prev">&#10094;</a>';
                echo "</div>";
            }
        }elseif($age == 2){
            $user = $bdd->query("SELECT * from membre inner join membre_loisirs on membre.id=membre_loisirs.id_membre inner join loisirs on loisirs.id=membre_loisirs.id_loisirs where membre.genre = '$genre' AND ville = '$ville' AND loisirs.id = $loisirs AND date_naissance BETWEEN 25  AND 35");
            if($user->rowCount() > 0){
                echo '<div class="_slider">';
                echo "<section class='elsection'>";
                while($userInfos = $user->fetch()){
            echo "<section class='profiles'>";
            echo "<div>";
                    echo "<h1>Informations</h1>";
                    echo "<p>".$userInfos[1]."</p>";
                    echo "<p>".$userInfos[2]."</p>";
                    echo "<p>".$userInfos[3]."</p>";
                    echo "<p>".$userInfos[4]."</p>";
                    echo "<p>".$userInfos[5]."</p>";
                    echo "</div>";
                    echo "</section>";
                }
                echo "</section>";
                echo '<a href="#" class="_slider_next">&#10095;</a>';
                echo '<a href="#" class="_slider_prev">&#10094;</a>';
                echo "</div>";
            }
        }elseif($age == 3){
            $user = $bdd->query("SELECT * from membre inner join membre_loisirs on membre.id=membre_loisirs.id_membre inner join loisirs on loisirs.id=membre_loisirs.id_loisirs where membre.genre = '$genre' AND ville = '$ville' AND loisirs.id = $loisirs AND date_naissance BETWEEN 35  AND 45");
            if($user->rowCount() > 0){
                echo '<div class="_slider">';
                echo "<section class='elsection'>";
                while($userInfos = $user->fetch()){
            echo "<section class='profiles'>";
            echo "<div>";
                    echo "<h1>Informations</h1>";
                    echo "<p>".$userInfos[1]."</p>";
                    echo "<p>".$userInfos[2]."</p>";
                    echo "<p>".$userInfos[3]."</p>";
                    echo "<p>".$userInfos[4]."</p>";
                    echo "<p>".$userInfos[5]."</p>";
                    echo "</div>";
                    echo "</section>";
                }
                echo "</section>";
                echo '<a href="#" class="_slider_next">&#10095;</a>';
                echo '<a href="#" class="_slider_prev">&#10094;</a>';
                echo "</div>";
            }
        }elseif($age == 4){
            $user = $bdd->query("SELECT * from membre inner join membre_loisirs on membre.id=membre_loisirs.id_membre inner join loisirs on loisirs.id=membre_loisirs.id_loisirs where membre.genre = '$genre' AND ville = '$ville' AND loisirs.id = $loisirs AND date_naissance >= 45 ");
            if($user->rowCount() > 0){
                echo '<div class="_slider">';
                echo "<section class='elsection'>";
                while($userInfos = $user->fetch()){
            echo "<section class='profiles'>";
            echo "<div>";
                    echo "<h1>Informations</h1>";
                    echo "<p>".$userInfos[1]."</p>";
                    echo "<p>".$userInfos[2]."</p>";
                    echo "<p>".$userInfos[3]."</p>";
                    echo "<p>".$userInfos[4]."</p>";
                    echo "<p>".$userInfos[5]."</p>";
                    echo "</div>";
                    echo "</section>";
                }
                echo "</section>";
                echo '<a href="#" class="_slider_next">&#10095;</a>';
                echo '<a href="#" class="_slider_prev">&#10094;</a>';
                echo "</div>";
            }
        }
        echo '<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>';
        echo '<script src="../js/carousel.js"></script>';
        
    }
}