<?php
/**
 * @var mixed $listObjUser
 */
?>
<main>
    <div class="columns is-flex-wrap-wrap">
        <?php for($i = 0; $i < count($listObjUser); $i++) { ?>
            <a href="<?php echo base_url() . "front_office/historiqueController?idObjet=" . $listObjUser[$i]["idObjet"]; ?>" class="column is-one-quarter">
                <div class="box">
                    <form action="<?php echo base_url("front_office/transactionController"); ?>" method="get">
                        <p class="subtitle is-4 item"> <?php echo $listObjUser[$i]["nomObj"]; ?> </p>
                        <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                            <img src="<?php echo base_url("assets/img/" . $listObjUser[$i]["nomPhoto"]); ?>">
                        </figure>
                        <br>
                        <p class="item"> <?php echo $listObjUser[$i]["prixObj"]; ?> Ar </p>
                        <p class="item"> Appartient à <?php echo $listObjUser[$i]["nomPers"]; ?> </p>
                        <br>
                        <input type="hidden" name="idHisObject" value="<?php echo $listObjUser[$i]["idObjet"]; ?>">
                        <input type="hidden" name="idPers" value="<?php echo $listObjUser[$i]["idPers"]; ?>">
                        <button class="button is-success"> Proposer </button>
                    </form>
                </div>
            </a>
        <?php } ?>
    </div>
</main>