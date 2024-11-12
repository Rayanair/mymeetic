<?php
// class MyDatabase {
//     public function connect_to_db(){
//         return $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
//     }

//     public function do_user_exists($mail){
//         $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
//         $mail = $_POST["mail"];
//         $checkIfUser = $bdd->prepare('SELECT email From member WHERE email = ?');
//         $checkIfUser->execute(array($mail));
//         if($checkIfUser->Row() == 0){
//             header('Location: http://localhost:8800/vues/moncompte.php?mail:'.$mail.'');
//         }else {
//             echo "NON MON REUF";
//         }

//     }

//     public function add_user_to_db($nom,$prenom,$date,$genre,$ville,$mail,$mdp){
//         $bdd = new PDO("mysql:host=localhost; dbname=meetic;" ,"root","");
//         $tt = $bdd->query("SELECT * from membre");
//         $aa = $tt->fetch();
//         if(isset($_POST["valide"])){
//         // $nom = $_POST["nom"];
//         // $prenom = $_POST["prenom"];
//         // $date = $_POST["date"];
//         // $genre = $_POST["genre"];
//         // $ville = $_POST["ville"];
//         // $mail = $_POST["mail"];
//         // $mdp = $_POST["mdp"];
//         $insertUserOnWebsite = $bdd->query("INSERT INTO membre (nom, prenom, date_naissance,genre,ville,email,mdp) VALUES('$nom','$prenom','$date','$genre','$ville','$mail','$mdp')");
//     }
        
//     }

// }

?> 