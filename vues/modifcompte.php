<?php 
require "header.php";
?>
<section class="modif">

  <div class="ladiv">
  <h1>Modifiez votre compte</h1>
   <form action="../Controler/controlmod.php" method="POST">

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11" >Email :</label>
                    <input type="email" id="form2Example11" class="form-control" name="mail"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22" >Mot de passe :</label>
                    <input type="text" id="form2Example22" class="form-control" name="mdp"/>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22" >Ville :</label>
                    <input type="text" id="form2Example22" class="form-control" name="ville"/>
                  </div>
                  <input type=""  name="email" value="<?= $_GET['mail'] ?>" style="display: none"/>
                  <input type=""  name="pre" value="<?= $_GET['prenom'] ?>" style="display: none"/>
      
                  <div>
                
        <select name="loisir1" id="" class="select">
            <option value="">Loisir 1</option>
            <option value="1">Music</option>
            <option value="2">Sport</option>
            <option value="3">Cinema</option>
            <option value="4">jeux video</option>
            <option value="5">Musé</option>
            <option value="6">Arts</option>
            <option value="7">Anime</option>
            <option value="8">Dessin</option>
            <option value="9">Manga</option>
            <option value="10">Informatique</option>
            <option value="11">Randonée</option>
            <option value="12">Surf</option>
            <option value="13">Muscu</option>
            <option value="14">Kung Fu</option>
            <option value="15">Voyage</option>
        </select>
        </div>
        <div>
        <select name="loisir2" id="" class="select">
            <option value="">Loisir 2</option>
            <option value="1">Music</option>
            <option value="2">Sport</option>
            <option value="3">Cinema</option>
            <option value="4">jeux video</option>
            <option value="5">Musé</option>
            <option value="6">Arts</option>
            <option value="7">Anime</option>
            <option value="8">Dessin</option>
            <option value="9">Manga</option>
            <option value="10">Informatique</option>
            <option value="11">Randonée</option>
            <option value="12">Surf</option>
            <option value="13">Muscu</option>
            <option value="14">Kung Fu</option>
            <option value="15">Voyage</option>
        </select>
        </div>
        <div>
        <select name="loisir3" id="" class="select">
            <option value="">Loisir 3</option>
            <option value="1">Music</option>
            <option value="2">Sport</option>
            <option value="3">Cinema</option>
            <option value="4">jeux video</option>
            <option value="5">Musé</option>
            <option value="6">Arts</option>
            <option value="7">Anime</option>
            <option value="8">Dessin</option>
            <option value="9">Manga</option>
            <option value="10">Informatique</option>
            <option value="11">Randonée</option>
            <option value="12">Surf</option>
            <option value="13">Muscu</option>
            <option value="14">Kung Fu</option>
            <option value="15">Voyage</option>
        </select>
        </div>
        <div>
        <select name="loisir4" id="" class="select">
            <option value="">Loisir 4</option>
            <option value="1">Music</option>
            <option value="2">Sport</option>
            <option value="3">Cinema</option>
            <option value="4">jeux video</option>
            <option value="5">Musé</option>
            <option value="6">Arts</option>
            <option value="7">Anime</option>
            <option value="8">Dessin</option>
            <option value="9">Manga</option>
            <option value="10">Informatique</option>
            <option value="11">Randonée</option>
            <option value="12">Surf</option>
            <option value="13">Muscu</option>
            <option value="14">Kung Fu</option>
            <option value="15">Voyage</option>
        </select>
        </div>
        <div>
        <select name="loisir5" id="" class="select">
            <option value="">Loisir 5</option>
            <option value="1">Music</option>
            <option value="2">Sport</option>
            <option value="3">Cinema</option>
            <option value="4">jeux video</option>
            <option value="5">Musé</option>
            <option value="6">Arts</option>
            <option value="7">Anime</option>
            <option value="8">Dessin</option>
            <option value="9">Manga</option>
            <option value="10">Informatique</option>
            <option value="11">Randonée</option>
            <option value="12">Surf</option>
            <option value="13">Muscu</option>
            <option value="14">Kung Fu</option>
            <option value="15">Voyage</option>
        </select>
        </div>
        <div>
                    <input type="submit" value="Modifier" name="valide"  id="elmodif">
          </div>
   </form>
   <form action="../Controler/controlSup.php" method="POST">
      <input type=""  name="email" value="<?= $_GET['mail'] ?>" style="display: none"/>
      <input type="submit" value="Supprimer" name="valide" id="elsup">
   </form>
   <form action="../Controler/controldeco.php" method="POST">
      <input type=""  name="email" value="<?= $_GET['mail'] ?>" style="display: none"/>
      <input type="submit" value="Déconnexion" name="valide" id="eldeco">
   </form>
   </div>
</section>