<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url("assets/bulma/css/bulma.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/page.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/header.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css"); ?>">
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logoPage.jpg"); ?>" type="image/x-icon">
        <title>e-Fanakalo</title>
    </head>
    <body>
        <header>
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="">
                        <img src="<?php echo base_url("assets/img/logoPage.jpg"); ?>" width="30" height="50"> <h1 class="title is-3" style="margin-left: .2em; margin-bottom: .2em;"> e-Fanakalo </h1>
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="<?php echo base_url("front_office/homeController"); ?>">
                            List object
                        </a>

                        <a class="navbar-item" href="<?php echo base_url("front_office/myObjectController"); ?>">
                            My object
                        </a>

                        <a class="navbar-item" href="<?php echo base_url("front_office/propositionController"); ?>">
                            Proposition
                        </a>
                    </div>
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a class="button is-warning" href="<?php echo base_url("loginController/logout"); ?>">
                                    Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <br><br><br>