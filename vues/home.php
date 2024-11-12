<?php 
require "header.php";
$prenom = $_GET["prenom"];
?>
<section class="home">
    <div class="bienvenu">
        <p class='bonj'>
            Bonjour <?= $prenom;?>
        </p>
    </div>
</section>