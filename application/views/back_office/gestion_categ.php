<?php
/**
 * @var mixed $listCateg
 * @var mixed $listObj
 * @var int $nbrUser
 * @var int $nbrExchangeClose
 */
?>
<main>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th> idObjet </th>
                    <th> idPersonne </th>
                    <th> Nom </th>
                    <th> Categorie </th>
                    <th> Prix </th>
                    <th>  </th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($listObj); $i++) { ?>
                    <form action="<?php echo base_url("back_office/homeController/treatmentCategory"); ?>" method="post">
                        <tr>
                            <td> <?php echo $listObj[$i]["idObjet"]; ?> </td>
                            <td> <?php echo $listObj[$i]["idPers"]; ?> </td>
                            <td> <?php echo $listObj[$i]["nomObj"]; ?> </td>
                            <td>
                                <div class="select">
                                    <select name="idCat" required>
                                        <?php
                                        for($j = 0; $j < count($listCateg); $j++) {
                                            if($listObj[$i]["idCat"] == $listCateg[$j]["idCat"]) { ?>
                                                <option value="<?php echo $listCateg[$j]["idCat"]; ?>" selected><?php echo $listCateg[$j]["nomCat"]; ?></option>
                                        <?php } else { ?>
                                                <option value="<?php echo $listCateg[$j]["idCat"]; ?>"><?php echo $listCateg[$j]["nomCat"]; ?></option>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                    <input type="hidden" value="<?php echo $listObj[$i]["idObjet"]; ?>" name="idObjet">
                                </div>
                            </td>
                            <td> <?php echo $listObj[$i]["prixObj"]; ?> Ar </td>
                            <td><button class="button is-success"> Valider </button></td>
                        </tr>
                    </form>
                <?php } ?>
            </tbody>
        </table>
        <button class="button is-info js-modal-trigger" data-target="modal-js-user">
            <img src="<?php echo base_url("assets/font/chart-bar-solid.svg"); ?>" style="filter: invert(1);">
        </button>
    </div>

    <!-- eto ny modal an'ny statistique -->
    <div id="modal-js-user" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <div class="columns">
                    <div class="column">
                        <p class="subtitle is-3"  style="display: flex; justify-content: center; align-items: center;"> Nombre d'user </p>
                        <p style="font-weight: bold; font-size: 50px; display: flex; justify-content: center;"> <?php echo $nbrUser; ?> </p>
                    </div>
                    <div class="column">
                        <p class="subtitle is-3"  style="display: flex; justify-content: center; align-items: center;"> Nombre d'échange </p>
                        <p style="font-weight: bold; font-size: 50px; display: flex; justify-content: center;"> <?php echo $nbrExchangeClose; ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
</main>
