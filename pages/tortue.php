<!doctype html>
<html lang="en">


<?php
$title = "tortue";
$nav = $title;
require 'components/header.php';
// include opening body
?>

<main>
    <H1>THE PAGE SUR LES TORTUES</H1>
    <p> ceci est la <?php echo $title; ?> !</p>
    <p>La tortue a une carapace. Elle peut vivre très longtemps ,sauf si elle mange des déchets humains.</p>
    <img src="../images/tortue.jpg" alt="Une tortue lutte" >
</main>


<?php
require 'components/footer.php';
// include closing body
?>


</html>