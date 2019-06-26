<?php

$conn = new PDO('mysql:host=localhost;dbname=forum_db');

if (isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = $conn->prepare("SELECT COUNT(id) FROM users WHERE username ='$username' AND password = '$password'");

    $query -> execute();

    $count = $query->fetchColumn();

    if ($count=="1"){
        $_SESSION['username'] = $username;

        header('location: homepagina.php');
    }
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
                    <h2>Login Forum</h2>
                    <img src="imgs/man.png" class="avatar">
                </center>

                <form class="myform" action="loginpagina.php" method="post">
                    <label><b>Gebruikersnaam:</b></label><br>
                    <input type="text" name="username" class="inputvalues" placeholder="Type uw gebruikersnaam"><br>

                    <label><b>Wachtwoord:</b></label><br>
                    <input type="password" name="password" class="inputvalues" placeholder="Type uw wachtwoord"><br>
                    <input type="submit" id="login_btn" value="Login"><br>
                    <input type="button" name="inputvalues" id="register_btn" value="Registreer" >
		</form>
	</div>

</body>
</html>