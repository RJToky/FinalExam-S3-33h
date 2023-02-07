<?php
/**
 * @var mixed $admin
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url("assets/bulma/css/bulma.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css"); ?>">
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logoPage.jpg"); ?>" type="image/x-icon">
        <title>Log in</title>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <form action="<?php echo base_url("loginController/checkUser"); ?>" method="post">
                    <p class="subtitle is-1 log_in"> Log in </p>
                    <div class="columns">
                        <div class="column">
                            <figure class="image">
                                <img src="<?php echo base_url("assets/img/login.jfif"); ?>">
                            </figure>
                        </div>
                        <div class="column">
                            <p class="subtitle is-2 site_name"> e-Fanakalo </p>
                            <br>
                            <p class="item"> Username or email : </p>
                            <input class="input" type="text" placeholder="Username or email" name="email" value="<?php echo $admin["email"]; ?>" required>
                            <br><br>
                            <p class="item"> Password : </p>
                            <input class="input" type="password" placeholder="Password" name="pwd" value="<?php echo $admin["pwd"]; ?>" required>
                            <br><br>
                            <div class="botona">
                                <button class="button log_button"> Se connecter </button>
                            </div>
                            <hr>
                            <p class="lien"><a href="<?php echo base_url("loginController/inscription"); ?>"> Creer un comtpe </a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>