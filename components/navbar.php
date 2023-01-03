<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="accouille">EXO RAN PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($nav==='index') {echo "active";} ?>" href="../index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($nav==='chat') {echo "active";} ?>" href="?page=chat">Page un</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($nav==='chien') {echo "active";} ?>" href="?page=chien">Page deux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($nav==='tortue') {echo "active";} ?>" href="?page=tortue">Page trois</a>
                </li>
            </ul>
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
