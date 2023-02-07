<?php
/**
 * @var mixed $listCateg
 * @var mixed $listObj
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
                    <tr>
                        <td> <?php echo $listObj[$i]["idObjet"]; ?> </td>
                        <td> <?php echo $listObj[$i]["idPers"]; ?> </td>
                        <td> <?php echo $listObj[$i]["nomObj"]; ?> </td>
                        <td>
                            <div class="select">
                                <form action="<?php echo base_url("back_office/homeController"); ?>">
                                    <select name="<?php echo $listObj[$i]["idObjet"]; ?>" required>
                                        <option value="">Null</option>
                                        <?php for($j = 0; $j < count($listCateg); $j++) { ?>
                                            <option value="<?php echo $listCateg[$j]["idCat"]; ?>"><?php echo $listCateg[$j]["nomCat"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </form>
                            </div>
                        </td>
                        <td> <?php echo $listObj[$i]["prixObj"]; ?> Ar </td>
                        <td><button class="button is-success"> Valider </button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>