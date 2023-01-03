<?php
function nav_item(string $lien, string $titre): string
{
  $class = 'nav-link';
  if (str_replace(".", "", $_SERVER['REQUEST_URI']) === str_replace(".", "", $lien)) {
      $class .= ' active';
  }
  return <<<HTML
        <li class="nav-item">
            <a class="$class" href="$lien">$titre</a>
        </li>
HTML;

}
?>

<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="accouille">EXO RAN PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
                <?php echo nav_item("../index.php", "Accueil"); ?>
                <?php echo nav_item("/index.php?page=chat", "Chat"); ?>
                <?php echo nav_item("/index.php?page=chien", "Chien"); ?>
                <?php echo nav_item("/index.php?page=tortue", "Tortue"); ?>

            </ul>
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
