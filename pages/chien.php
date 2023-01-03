<!doctype html>
<html lang="en">


<?php
$title = "chien";
$nav = $title;
require 'components/header.php';
// include opening body
?>

<main>
    <H1>THE PAGE SUR LES CHIENS</H1>
    <p> ceci est la <?php echo $title; ?> !</p>
    <p>Le chien aboie, ronge des os et rapporte la baballe.</p>
    <img src="../images/chien.jpg" alt="Un chien fier" >
</main>


<?php
require 'components/footer.php';
// include closing body
?>


</html>