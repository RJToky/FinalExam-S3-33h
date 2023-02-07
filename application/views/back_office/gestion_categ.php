<?php
/**
 * @var mixed $listCateg
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1 </td>
                    <td> 1 </td>
                    <td> Kapoty </td>
                    <td>
                        <div class="select">
                            <select name="" id="">
                                <option value="">Null</option>
                                <?php for($i = 0; $i < count($listCateg); $i++) { ?>
                                    <option value="<?php echo $listCateg[$i]["idCat"]; ?>"><?php echo $listCateg[$i]["nomCat"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </td>
                    <td> 0000 Ar </td>
                    <td><button class="button is-success"> Valider </button></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>