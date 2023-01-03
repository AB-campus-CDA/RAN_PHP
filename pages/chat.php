<!doctype html>
<html lang="en">


<?php
$title = "chat";
$nav = $title;
require 'components/header.php';
// include opening body
?>

<main>
    <H1>THE PAGE SUR LES CHATS</H1>
    <p> ceci est la <?php echo $title; ?> !</p>
    <p>Le chat miaule, griffe les murs et rapporte des lézards dans ton lits ...</p>
    <img src="../images/chat.jpg" alt="Un minou trop chou" >
</main>
<pre>
            <?php print_r($_SERVER); ?>
        </pre>

<?php
require 'components/footer.php';
// include closing body
?>


</html>