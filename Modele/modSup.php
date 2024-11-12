<?php 
class ModSup{
    function sup($mail) {
            $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
            $checkIfUserExist = $bdd->query("UPDATE membre SET sup = 0 WHERE email ='$mail'");    
}               
}
?>