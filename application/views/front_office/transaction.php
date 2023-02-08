<?php
/**
 * @var int $idHisObject
 * @var int $idPers
 * @var mixed $objUser
 * @var mixed $listMyObject
 */
?>
<link rel="stylesheet" href="<?php echo base_url("assets/css/transaction.css"); ?>">
<main>
    <form action="<?php echo base_url("front_office/transactionController/sendProposition"); ?>" method="post">
        <div class="container">
            <p class="subtitle is-2 page_echange"> Page d'échange </p>
            <hr>
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <p class="subtitle is-4 item"> <?php echo $objUser["nomObj"]; ?> </p>
                        <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                            <img src="<?php echo base_url("assets/img/" . $objUser["nomPhoto"]); ?>">
                        </figure>
                        <br>
                        <p class="item"> <?php echo $objUser["prixObj"]; ?> Ar </p>
                        <p class="item"> Appartient à <?php echo $objUser["nomPers"]; ?> </p>
                        <br>
                        <input type="hidden" name="idHisObject" value="<?php echo $objUser["idObjet"]; ?>">
                        <input type="hidden" name="idPers" value="<?php echo $objUser["idPers"]; ?>">
                        <button class="button is-success"> Proposer </button>
                    </div>
                </div>
                <div class="column column_icon">
                    <button class="button" style="height: 20%; width: 20%; border: 0px;">
                        <img src="<?php echo base_url("assets/font/fa-exchange.svg.png"); ?>" width="100%">
                    </button>
                </div>
                <div class="column">
                    <div class="select" style="width: 100%;">
                        <select class="" name="idMyObject" id="object" style="width: 100%;">
                            <?php for($i = 0; $i < count($listMyObject); $i++) { ?>
                                <option value="<?php echo $listMyObject[$i]["idObjet"]; ?>"><?php echo $listMyObject[$i]["nomObj"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="box" id="my-object" style="margin-top: 1em;">
                        <?php if(count($listMyObject) != 0) { ?>
                            <p class="subtitle is-4 item"> <?php echo $listMyObject[0]["nomObj"]; ?> </p>
                            <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                                <img src="<?php echo base_url("assets/img/" . $listMyObject[0]["nomPhoto"]); ?>">
                            </figure>
                            <br>
                            <input type="hidden" name="idMyObject" value="<?php echo $listMyObject[0]["idObjet"]; ?>">
                            <p class="item"> <?php echo $listMyObject[0]["prixObj"]; ?> Ar </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>

<script>
    window.addEventListener("load", () => {

        const myObject = document.querySelector("#my-object");

        const send = () => {
            var xhr;
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e2) {
                    try {
                        xhr = new XMLHttpRequest();
                    } catch (e3) {
                        xhr = false;
                    }
                }
            }

            xhr.addEventListener("load", (e) => {
                let msg = e.target.responseText;
                let data = JSON.parse(msg);
                myObject.innerHTML = `
                    <p class="subtitle is-4 item"> ${data["nomObj"]} </p>
                        <figure class="image is-128x128" style="margin: auto; overflow: hidden;">
                            <img src="<?php echo base_url(); ?>assets/img/${data["nomPhoto"]}">
                        </figure>
                        <br>
                        <input type="hidden" name="idMyObject" value="${data["idObjet"]}">
                    <p class="item"> ${data["prixObj"]} Ar </p>
                `;
            });

            xhr.addEventListener("error", () => {
                alert("Oups! Quelque chose s'est mal passé");
            });

            var path = `<?php echo base_url(); ?>front_office/transactionController/selectOnChange?idObjet=${select.value}`;

            xhr.open("GET", path);
            xhr.send(null);
        };

        const select = document.querySelector("#object");
        select.addEventListener("click", (e) => {
            e.preventDefault();
            send();
        });
    });
</script>