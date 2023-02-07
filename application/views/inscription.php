<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/bulma/css/bulma.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css"); ?>">
    <title>Sign in</title>
</head>
<body>
    <div class="container container_login">
        <div class="box">
            <form action="<?php echo base_url("loginController/inscrire"); ?>" method="post">
                <p class="subtitle is-1 log_in"> Sign in </p>
                <div class="columns">
                    <div class="column">
                        <figure class="image">
                            <img src="<?php echo base_url("assets/img/inscription.jfif"); ?>">
                        </figure>
                    </div>
                    <div class="column">
                        <p class="subtitle is-2 site_name_signin"> e-Fanakalo </p>
                        <br>
                        <p class="item"> Name : </p>
                        <input class="input" type="text" placeholder="Name" name="nom" required>
                        <br><br>
                        <p class="item"> Email : </p>
                        <input class="input" type="text" placeholder="Email" name="email" required>
                        <br><br>
                        <p class="item"> Password : </p>
                        <input class="input" type="password" placeholder="Password" name="pwd" required>
                        <br><br>
                        <div class="botona">
                            <button class="button sign_button"> S'inscrire </button>
                        </div>
                        <hr>
                        <p class="lien"><a href="<?php echo base_url("loginController/"); ?>"> J'ai deja un comtpe </a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>