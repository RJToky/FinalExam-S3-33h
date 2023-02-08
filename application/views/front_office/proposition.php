<?php
/**
 * @var mixed $listProposition
 * @var mixed $listPropositionToMe
 */
?>
<main>
    <div class="columns is-flex-wrap-wrap">
        <?php for($i = 0; $i < count($listProposition); $i++) { ?>
            <div class="column is-one-quarter">
                <div class="box">
                    <p class="subtitle is-4 item"> <?php echo $listProposition[$i]["nomObj"]; ?> </p>
                    <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                        <img src="<?php echo base_url("assets/img/" . $listProposition[$i]["nomPhoto"]); ?>">
                    </figure>
                    <br>
                    <p class="item"> <?php echo $listProposition[$i]["prixObj"]; ?> Ar </p>
                    <p class="item"> Appartient à <?php echo $listProposition[$i]["nomPers"]; ?> </p>
                    <p class="item"> Contre votre objet <?php echo $listPropositionToMe[$i]["nomObj"]; ?> </p>
                    <br>
                    <div class="buttons is-flex-wrap-nowrap">
                        <button class="button is-success"><a href="<?php echo base_url() . "front_office/transactionController/treatProposition?response=1&idHisObject=" . $listProposition[$i]["idObjet"] . "&idPers=" . $listProposition[$i]["idPers"] . "&idMyObject=" . $listPropositionToMe[$i]["idObjet"]; ?>" style="color: white"> Accepter </a></button>
                        <button class="button is-danger"><a href="<?php echo base_url() . "front_office/transactionController/treatProposition?response=0&idHisObject=" . $listProposition[$i]["idObjet"] . "&idPers=" . $listProposition[$i]["idPers"] . "&idMyObject=" . $listPropositionToMe[$i]["idObjet"]; ?>" style="color: white"> Decliner </a> </button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>