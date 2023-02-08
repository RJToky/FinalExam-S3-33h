<link rel="stylesheet" href="<?php echo base_url("assets/css/transaction.css"); ?>">
<main>
    <div class="container">
        <p class="subtitle is-2 page_echange"> Page d'échange </p>
        <hr>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <p class="subtitle is-4 item"> Nom produit </p>
                    <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                        <img src="<?php echo base_url("assets/img/inscription.jfif"); ?>">
                    </figure>
                    <br>
                    <p class="item"> 0000 Ar </p>
                    <p class="item"> Appartient à PERSONNE </p>
                    <br>
                    <button class="button is-success"> Echanger </button>
                </div>
            </div>
            <div class="column column_icon">
                <button class="button" style="height: 20%; width: 20%; border: 0px;">
                    <img src="<?php echo base_url("assets/font/fa-exchange.svg.png"); ?>" width="100%">
                </button>
            </div>
            <div class="column">
                <select class="input" name="" id="object">
                    <option value="">Choose object</option>
                    <option value="">Lunette</option>
                </select>
                <div class="box" style="margin-top: 1em;">
                    <p class="subtitle is-4 item"> Nom produit </p>
                    <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                        <img src="<?php echo base_url("assets/img/inscription.jfif"); ?>">
                    </figure>
                    <br>
                    <p class="item"> 0000 Ar </p>
                </div>
            </div>
        </div>
    </div>
</main>