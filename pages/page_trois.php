<!doctype html>
<html lang="en">


<?php
$title = "page 3";
$nav = $title;
require 'components/header.php';
// include opening body
?>

<main>
    <H1>THE PAGE 3</H1>
    <p> ceci est la <?php echo $title; ?> !</p>
</main>


<?php
require 'components/footer.php';
// include closing body
?>


</html>