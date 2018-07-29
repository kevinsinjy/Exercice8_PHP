<?php


    session_start();
    $_SESSION['lastname'] = 'sinjy';
    $_SESSION['firstname']='kevin';
    $_SESSION['age']=25;
    ?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exo 8</title>
    </head>
    <body>
<?php

    //Exo 1
    //Récupérer user_agent
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    echo $user_agent."<br>";
    //Récupérer l'IP
    function get_ip() {
        // IP si internet partagé
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        // IP derrière un proxy
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        // Sinon : IP normale
        else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }
    echo get_ip()."<br>";
    //Récupérer le nom du serveur
    $server_name = $_SERVER['SERVER_NAME'];
    echo $server_name."<br>";

    //Exo 2

    echo "<a href='page2.php'>page 2</a><br>";

    //formulaire PHP
    echo "<form action='login.php' method='post'>
    login
    <input type='text' name='login'>
    mot de passe 
    <input type='password' name = 'password'>
    <input type='submit' name='valider'>
    </form>";

?>
</body>
</html>
