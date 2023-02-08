<?php
/**
 * @var mixed $result
 */
?>
<main>
    <div class="columns is-flex-wrap-wrap">
        <?php for($i = 0; $i < count($result); $i++) { ?>
            <div class="column is-one-quarter">
                <div class="box">
                    <form action="<?php echo base_url("front_office/transactionController"); ?>" method="post">
                        <p class="subtitle is-4 item"> <?php echo $result[$i]["nomObj"]; ?> </p>
                        <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                            <img src="<?php echo base_url("assets/img/" . $result[$i]["nomPhoto"]); ?>">
                        </figure>
                        <br>
                        <p class="item"> <?php echo $result[$i]["prixObj"]; ?> Ar </p>
                        <p class="item"> Appartient à <?php echo $result[$i]["nomPers"]; ?> </p>
                        <br>
                        <button class="button is-success"> Echanger </button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
</main>