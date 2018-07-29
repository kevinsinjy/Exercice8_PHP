<?php

    setcookie('identifiant', $_POST['login'], time() + 365*24*3600, null, null, false, true); //Exo 3
    setcookie('mdp', $_POST['password'], time() + 365*24*3600, null, null, false, true); //Exo 3

    echo $_COOKIE["identifiant"]." ".$_COOKIE["mdp"]."<br>"; //Exo 4

    echo "<a href='reset.php'>reset cookies</a>" ;
