<!doctype html>
<html lang="en">


<?php
echo session_save_path();
session_start();

$message = "<p>Vous n'etes pas loggé, rdv en page de contact</p>";

if (isset($_SESSION['form']['firstname'])) {
    $name = $_SESSION['form']['firstname'];
    $message = "<p>Vous etes loggé en tant que $name</p>";
}

$title = "EXO RAN PHP";
require 'components/header.php';
// include opening body
?>

<main>
    <H1>MA PAGE INDEX</H1>
    <p> ceci est la page d'accueil !</p>
    <p>version <em>Front Controller</em></p>
    <br>
    <?php echo $message ?>
</main>

<pre>
            <?php print_r($_SERVER); ?>
        </pre>

<?php
require 'components/footer.php';
// include closing body
?>


</html>