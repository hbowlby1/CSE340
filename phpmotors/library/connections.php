<?php
// proxy connection to the phpmotors database

function phpmotorsConnect()
{
    $server = 'localhost';
    $dbname = 'phpmotors';
    $username = 'iClient';
    $password = '/ip]@[U2/bw5a]TX';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $link = new PDO($dsn, $username, $password, $option);
        // if (is_object($link)) {
        //     echo 'Connected';
        // }
        return $link;
    } catch (PDOException $e) {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/phpmotors/view/500.php');
        exit;
    }
}
phpmotorsConnect();
?>