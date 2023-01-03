<!doctype html>
<html lang="en">


<?php
$title = "contact";
$nav = $title;
require 'components/header.php';
// include opening body
?>

<main>
    <H1>Formulaire de contact</H1>

    <div class="container">
        <form class="border p-3 rounded">
            <div class="my-2">
                <label for="civilie">Civilité :</label>
                <select name="civilite">
                    <option value="M." >M.</option>
                    <option value="Mme" >Mme</option>
                </select>
            </div>

            <div class="my-2">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname">
            </div>

            <div class="my-2">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname">
            </div>

            <div class="my-2">
                <label for="email">Email :</label>
                <input type="email" name="email">
            </div>

            <div class="my-2">
                <fieldset name="raison">
                    <div class="mb-2">
                        <label for="job">Proposition d'emploi</label>
                        <input type="radio" id="job" name="raison" value="job">
                    </div>

                    <div class="mb-2">
                        <label for="info">Demande d'infos</label>
                        <input type="radio" id="info" name="raison" value="info">
                    </div>


                    <label for="presta">Prestation</label>
                    <input type="radio" id="presta" name="raison" value="presta">
                </fieldset>
            </div>

            <div class="my-2">
                <p>
                    <label for="message">Message :</label>
                </p>
                <textarea name="message" id="message" rows="4" ></textarea>
            </div>

            <input type="submit" value="Envoyer">

        </form>

        <pre>
            <?php print_r($_SERVER); ?>
        </pre>
    </div>
</main>


<?php
require 'components/footer.php';
// include closing body
?>


</html>