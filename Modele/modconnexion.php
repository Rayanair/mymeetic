<?php 
class ModConex {
    function conex($mail,$mdp) {
            $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
    
                $checkIfUserAlreadyExists = $bdd->prepare('SELECT email From membre WHERE email = ?');
                $checkIfUserAlreadyExists->execute(array($mail));
        
                $checkIfUserExist = $bdd->prepare('SELECT * FROM membre WHERE email = ?');
                $checkIfUserExist-> execute(array($mail));
        
                if($checkIfUserExist->rowCount() > 0) {
                    $userInfos = $checkIfUserExist->fetch();

                    if($userInfos["sup"] == 1){
                        echo($mdp);
                    echo($userInfos['mdp']);
                    if(password_verify($mdp, $userInfos['mdp'])){
                        echo "zzzzz";
                    
                    header('Location: http://localhost:8800/vues/home.php?mail='.$mail.'&prenom='.$userInfos["prenom"].'');
        
                    }else{
                        
                        echo'Votre mot de passe est incorrect';
                    }
        
                    }else{
                        echo'Votre compte a été supprimé';
                    }

                }else{
                    echo "Votre compte n'existe pas";
                }
            
    }
}