<?php 
$mail = $_GET['mail'];
$prenom = $_GET["prenom"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/header.js"></script>  
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/moncompte.css"/>
    <link rel="stylesheet" href="../css/mod.css"/>
    <link rel="stylesheet" href="../css/recherche.css"/>
    <script type="text/javascript" src="../js/ajax.js"></script>  
</head>
<header>
        <nav>
            <ul class="navigation">
                <li class="toggleSubMenu"><span>Menu ↓</span>
                    <ul class="subMenu">
                    <li><a href='../vues/home.php?mail=<?= $mail ?>&prenom=<?= $prenom?>' title="Aller à la page 1">Accueil</a></li>
                    <li><a href='../vues/moncompte.php?mail=<?= $mail ?>&prenom=<?= $prenom?>'  title="Aller à la page 2.1">Mon Profil</a></li>
                    <li><a href='../vues/modifcompte.php?mail=<?= $mail ?>&prenom=<?= $prenom?>'  title="Aller à la page 2.2">Paramètre</a></li>
                    <li><a href='../vues/recherche.php?mail=<?= $mail ?>&prenom=<?= $prenom?>'  title="Aller à la page 3.1">Rencontre</a></li>
                    </ul>
                    </li>
            </ul>
        </nav>
    </header>