<?php
/**
 * @var mixed $listHisto
 */
?>
<main>
    <div class="container">
        <p class="subtitle is-2 page_echange"> Page des historiques </p>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th> Nom de l'objet </th>
                    <th> Proprietaire </th>
                    <th> Date </th>
                    <th> Heure </th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($listHisto); $i++) { ?>
                    <tr>
                        <td> <?php echo $listHisto[$i]["nomObj"]; ?> </td>
                        <td> <?php echo $listHisto[$i]["nomPers"]; ?> </td>
                        <td> <?php echo $listHisto[$i]["daty"]; ?> </td>
                        <td> <?php echo $listHisto[$i]["lera"]; ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>