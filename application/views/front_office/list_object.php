<?php
/**
 * @var mixed $listObjUser
 */
?>
<main>
    <div class="columns is-flex-wrap-wrap">
        <?php for($i = 0; $i < count($listObjUser); $i++) { ?>
            <div class="column is-one-quarter">
                <div class="box">
                    <p class="subtitle is-4 item"> <?php echo $listObjUser[$i]["nomObj"]; ?> </p>
                    <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                        <img src="<?php echo base_url("assets/img/" . $listObjUser[$i]["nomPhoto"]); ?>">
                    </figure>
                    <br>
                    <p class="item"> <?php echo $listObjUser[$i]["prixObj"]; ?> Ar </p>
                    <p class="item"> Appartient à <?php echo $listObjUser[$i]["nomPers"]; ?> </p>
                    <br>
                    <button class="button is-success"> Echanger </button>
                </div>
            </div>
        <?php } ?>
    </div>
</main>