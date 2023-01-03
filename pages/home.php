<!doctype html>
<html lang="en">


<?php
$title = "EXO RAN PHP";
$nav = "index";
require 'components/header.php';
// include opening body
?>

<main>
    <H1>MA PAGE INDEX</H1>
    <p> ceci est la page d'accueil !</p>
    <p>version <em>Front Controller</em></p>
</main>

<pre>
            <?php print_r($_SERVER); ?>
        </pre>

<?php
require 'components/footer.php';
// include closing body
?>


</html>