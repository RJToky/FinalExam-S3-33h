<?php
/**
 * @var mixed $listMyObject
 */
?>
<link rel="stylesheet" href="<?php echo base_url("assets/css/my_object.css"); ?>">
<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
<main>
    <div class="columns is-flex-wrap-wrap">
        <?php for($i = 0; $i < count($listMyObject); $i++) { ?>
            <a href="<?php echo base_url() . "front_office/historiqueController?idObjet=" . $listMyObject[$i]["idObjet"]; ?>" class="column is-one-quarter">
                <div class="box">
                    <p class="subtitle is-4 item"> <?php echo $listMyObject[$i]["nomObj"]; ?> </p>
                    <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                        <img src="<?php echo base_url("assets/img/" . $listMyObject[$i]["nomPhoto"]); ?>" alt="<?php echo $listMyObject[$i]["nomObj"]; ?>">
                    </figure>
                    <br>
                    <p class="item"> <?php echo $listMyObject[$i]["prixObj"]; ?> Ar </p>
                    <p class="item"> Appartient à MOI </p>
                    <br>
<!--                    <button class="button is-success"> Echanger </button>-->
                </div>
            </a>
        <?php } ?>
    </div>
    <button class="js-modal-trigger button is-info add_btn" data-target="modal-add-objet">
        <figure class="icon">
            <i class="fas fa-plus"></i>
        </figure>
    </button>
    <form action="<?php echo base_url("front_office/myObjectController/uploadObject"); ?>" method="post" enctype="multipart/form-data">
        <div id="modal-add-objet" class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <p class="subtitle is-4 modal_subtitle">Add new object</p>
                    <input class="input" type="text" placeholder="Object name" name="nomObj" required>
                    <input class="input modal_input" type="text" placeholder="Description" name="description" required>
                    <input class="input modal_input" type="number" placeholder="Object price" name="prixObj" required>
                    <input class="input modal_input" type="file" placeholder="Photo" name="nomPhoto" required>
                    <div class="div_modal_btn">
                        <button class="button is-primary"> Ajouter </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <button class="modal-close is-large" aria-label="close"></button>
</main>