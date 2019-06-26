<?php

require 'dbconfig/config.php';

session_start();

echo "Welkom".$_SESSION['username']; //hiermee groet ik de gebruiker

if (isset($_POST['logout'])){
    session_start();
    session_destroy();

    header('location: loginpagina.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="utf-8">
    <meta lang="nl">
    <title>Loginpagina</title>
</head>
<body>

<div id="main-block">
    <center>
        <h2>Welkom</h2>
        <img src="imgs/man.png" class="avatar">
    </center>

    <form method="post" name="logout">
        <input type="submit"  name="logout" placeholder="log out">
    </form>
</div>

</body>
</html>