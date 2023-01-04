<!doctype html>
<html lang="en">


<?php
$title = "contact";
$nav = $title;
require 'components/header.php';
// include opening body
?>


<?php
$errors = [];
require "functions/handleForm.php" ?>


<main>
    <H1>Formulaire de contact</H1>

    <div class="container">
        <form class="form-group p-1 rounded" action="/?page=contact" method="POST">

            <!-- show list of errors -->
            <?php if (count($errors)) {
                foreach ($errors as $key => $err) {
                    ?>
                    <div class="alert alert-danger">
                        <?php echo $err; ?>
                    </div>
                    <?php
                }
            }?>
            <div class="my-2 form-control">
                <label for="civilite">Civilité :</label>
                <select name="civilite">
                    <option value="M."  <?php if (htmlentities($_POST['civilite']) ==='M.') { echo "selected"; } ?> >M.</option>
                    <option value="Mme" <?php if (htmlentities($_POST['civilite']) ==='Mme') { echo "selected"; } ?> >Mme</option>
                </select>
            </div>

            <div class="my-2 form-control">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname" value="<?php echo htmlentities($_POST['lastname']); ?>">
            </div>

            <div class="my-2 form-control">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" value="<?php echo htmlentities($_POST['firstname']); ?>">
            </div>

            <div class="my-2 form-control">
                <label for="email">Email :</label>
                <input type="email" name="email" value="<?php echo htmlentities($_POST['email']); ?>">
            </div>

            <div class="my-2 form-control">
                <fieldset name="raison">
                    <div class="mb-2">
                        <label for="job">Proposition d'emploi</label>
                        <input type="radio" id="job" name="raison" value="job" <?php if (htmlentities($_POST['raison']) ==='job') { echo "checked"; } ?> >
                    </div>

                    <div class="mb-2">
                        <label for="info">Demande d'infos</label>
                        <input type="radio" id="info" name="raison" value="info" <?php if (htmlentities($_POST['raison']) ==='info') { echo "checked"; } ?> >
                    </div>


                    <label for="presta">Prestation</label>
                    <input type="radio" id="presta" name="raison" value="presta" <?php if (htmlentities($_POST['raison']) ==='presta') { echo "checked"; } ?> >
                </fieldset>
            </div>

            <div class="my-2 form-control">
                <p>
                    <label for="message">Message :</label>
                </p>
                <textarea name="message" id="message" rows="4"
                          placeholder="Votre message ici"
                ><?php echo htmlentities($_POST['message']); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary" >Envoyer</button>

        </form>


<!--        <pre>
            <?php /*print_r($_GET); */?>
            <?php /*print_r($_POST); */?>
        </pre>-->
    </div>
</main>


<?php
require 'components/footer.php';
// include closing body
?>


</html>