<?php 
 require "../Controler/controlinscri.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elmeetic</title>
    <link rel="stylesheet" href="../css/inscription.css"></link>
    <script src="../ajax/ajax.js"></script>
</head>
<body>
<section class="h-100 gradient-form" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="/assets/logo.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">On cherche l'amour ?</h4>
                </div>

                <form method="POST" id="leform">
                  <p>Créer ton compte</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Prénom</label>
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Prénom" name="prenom"/>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Nom</label>
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Nom" name="nom"/>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Age</label>
                    <input type="number" id="form2Example11" class="form-control"
                      placeholder="Age" name="date" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Genre</label>
                    <select name="genre" id="">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11" >Ville</label>
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Ville" name="ville"/>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11" >Email</label>
                    <input type="email" id="form2Example11" class="form-control"
                    placeholder="Mail" name="mail"/>
                  </div>


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22" >Mot de passe</label>
                    <input type="password" id="form2Example22" class="form-control" name="mdp"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" value="s'inscrire" name="valide">
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Vous avez un compte?</p>
                    <a href="/vues/connexion.php"><button type="button" class="btn btn-outline-danger">sign</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>