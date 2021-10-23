<?php
/*
* Proxy connection to the phpmotors database
*/

function phpmotorsConnect(){
    $server = 'localhost';
    $dbname = 'phpmotors';
    $username = 'iClient';
    $password = '/ip]@[U2/bw5a]TX';

    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    //
    try {
        $link = new PDO($dsn, $username, $password, $options);
        //if (is_object($link)) {
        //    echo 'It worked!';
        //}
        return $link;
    } catch(PDOException $e) {
        //echo "It didn't work, erroe: " . $e->getMessage();
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}

phpmotorsConnect();