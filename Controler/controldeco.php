<?php 
class Deco{
    function deco(){
        header('Location: http://localhost:8800');
    }
}
$t = new Deco();
$t->deco();