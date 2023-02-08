<?php
/**
 * @var mixed $listProposition
 */
?>
<main>
    <div class="columns is-flex-wrap-wrap">
        <?php for($i = 0; $i < count($listProposition); $i++) { ?>
            <div class="column is-one-quarter">
                <form action="" method="post">
                    <div class="box">
                        <p class="subtitle is-4 item"> <?php echo $listProposition[$i]["nomObj"]; ?> </p>
                        <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                            <img src="<?php echo base_url("assets/img/" . $listProposition[$i]["nomPhoto"]); ?>">
                        </figure>
                        <br>
                        <p class="item"> <?php echo $listProposition[$i]["prixObj"]; ?> Ar </p>
                        <p class="item"> Appartient à <?php echo $listProposition[$i]["nomPers"]; ?> </p>
                        <br>
                        <div class="buttons is-flex-wrap-nowrap">
                            <button class="button is-success"> Accepter </button>
                            <button class="button is-danger"> Decliner </button>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</main>