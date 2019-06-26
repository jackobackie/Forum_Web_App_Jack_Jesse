<?php

$servername = "localhost";
$username = "root";
$password = "";


    try{
        $conn = new PDO("mysql:host=$servername;dbname=forum_db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Dit is het beste wat me ooit is overkomen!";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

?>