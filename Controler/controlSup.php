<?php 
require "../Modele/modSup.php";
class controlSup{
    public function sup() {
        if(isset($_POST["valide"])){
            $mail = $_POST["email"];
            $z = new ModSup();
            $z->sup($mail);
            header('Location: http://localhost:8800');
    }
}
}
$r = new controlSup();
$r->sup();