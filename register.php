<?php

require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="utf-8">
    <meta lang="nl">
    <title>Registreer Pagina</title>
</head>
<body>

<div id="main-block">
    <center>
        <h2>Login Forum</h2>
        <img src="imgs/man.png" class="avatar">
    </center>

    <form class="myform" action="register.php" method="post">
        <label><b>Gebruikersnaam:</b></label><br>
        <input type="text" name="username" class="inputvalues" placeholder="Type uw gebruikersnaam" required/><br>

        <label><b>Wachtwoord:</b></label><br>
        <input type="password" name="password" class="inputvalues" placeholder="Type uw wachtwoord" required/><br>
        <label><b>Herhaal uw Wachtwoord:</b></label><br>
        <input type="password" name="cpassword" class="inputvalues" placeholder="Herhaal uw wachtwoord" required/><br>
        <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"><br>
        <input type="button" id="back_btn" value="Terug">
    </form>

    <?php

    if(isset($_POST['submit_btn']))
    {
        //echo '<script type="text/javascript"> alert("login button geklikt") </script>';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($cpassword==$password){

            $query= "select * from user WHERE username='$username'";


        }

    }

    ?>
</div>

</body>
</html>
