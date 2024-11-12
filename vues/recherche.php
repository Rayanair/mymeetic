<?php require "header.php" ?>
<section class="recherche">
   <form  action="../Controler/controlrech.php?mail=<?= $mail ?>&prenom=<?= $prenom?>" method="POST">
                <div class="form-outline mb-4">
                <label class="form-label" for="form2Example11">Genre :</label>
                    <select name="genre" id="genre">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Localisation :</label>
                    <input type="text" id="ville" class="form-control"
                    placeholder="Ville" name="ville"/>
                  </div>


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Loisirs :</label>
                    <select name="loisir" id="loisir" class="select">
                        <option value="">Loisirs</option>
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

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Tranche d'age :</label>
                    <select name="age" id="age">
                      <option value="1">18/25</option>
                      <option value="2">25/35</option>
                      <option value="3">35/45</option>
                      <option value="4">45+</option>
                    </select>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" value="Rechercher" name="valide">
                  </div>

   </form>
   <div>

   </div>
</section>