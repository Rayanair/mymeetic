<?php 
 require "../Controler/controleconex.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elmeetic</title>
    <link rel="stylesheet" href="../css/inscription.css"></link>
</head>
<body>
<form method="POST">
<section class="h-100 gradient-form" style="background-color: #eee;">
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
                  <h4 class="mt-1 mb-5 pb-1">Connect toi !</h4>
                </div>

                <form method="POST">
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11" >mail</label>
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" name="mail"/>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">mot de passe</label>
                    <input type="password" id="form2Example22" class="form-control" name="mdp"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                  <input type="submit" value="Se connecter" name="valide">
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Vous n'avez pas de compte?</p>
                    <a href="../vues/inscription.php"><button type="button" class="btn btn-outline-danger">Créer un compte</button></a>
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
</form>
</body>
</html>