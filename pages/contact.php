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

require "models/civilites.php";
require "models/raisons.php";

require "functions/handleForm.php";
?>


<main>
    <H1>Formulaire de contact</H1>

    <div class="container">
        <form class="border p-1 rounded" action="/?page=contact" method="POST">

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

            <!-- civilite -->
            <div class="input-group my-3">
                <label for="civilite" class="input-group-text">Civilité :</label>
                <select name="civilite" class="form-select" id="civilite">
                    <option value="">Sélection</option>
                    <?php
                    foreach($civList as $civ) {
                        echo "<option value='$civ' ". (htmlentities($_POST["civilite"]) === $civ ? " selected" : null) . ">$civ</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="input-group my-3">
                <label for="lastname" class="input-group-text">Nom :</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo htmlentities($_POST['lastname']); ?>" class="form-control">
            </div>

            <div class="input-group my-3">
                <label for="firstname" class="input-group-text">Prénom :</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo htmlentities($_POST['firstname']); ?>" class="form-control">
            </div>

            <div class="input-group my-3">
                <label for="email" class="input-group-text">Email :</label>
                <input type="email" name="email" id="email" value="<?php echo htmlentities($_POST['email']); ?>" class="form-control">
            </div>

            <div class="my-3 ">
                <fieldset name="raison" class="form-group">
                    <?php
                    foreach($raisonList as $key => $raison) {
                        echo "<div class='form-check mb-2'>";
                            echo "<input class='form-check-input' type='radio' id='$key' name='raison' value='$key'".
                                (htmlentities($_POST["raison"]) === $key ? " checked" : null).">";
                            echo "<label class='form-check-label' for='$key'>$raison</label>";
                        echo "</div>";
                    }
                    ?>
                </fieldset>
            </div>

            <div class="my-3">
                <p>
                    <label for="message">Message :</label>
                </p>
                <textarea name="message" id="message" rows="4" class="w-100"
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