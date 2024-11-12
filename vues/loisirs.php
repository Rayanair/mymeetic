<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elmeetic</title>
    <link rel="stylesheet" href="../css/loisir.css"/>
</head>
<body>
    <h1>Que cherchez-vous ?</h1>
    <section>
    <form action="../Controler/controlloisirs.php" method="POST">
        <label for="scales">Attirance : </label>
        <select name="genre" id="">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>

        <fieldset>
        <legend>Vos loisirs:</legend>
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
        <input value="<?= $_GET["mail"]?>" name="mail" class="ins" style="display: none">
        <input value="<?= $_GET["prenom"]?>" name="prenom" class="ins" style="display: none">
        </fieldset>
        <input type="submit" value="S'inscrire" name="valide" class="ins">
    </form>
    </section>
</body>
</html>