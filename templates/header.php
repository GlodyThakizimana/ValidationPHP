<?php if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'])
    {
        include('templates/header_logout.php');
    }
    else { ?>
        <header>
            <nav class="row">
                <ul class="d-flex justify-content-around navbar navbar-light bg-light col-12 ">
                    <li class="nav-item active"><a class=" cc-a-header btn btn-primary" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="contenue.php">Contenue</a></li>
                    <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="formulaire.php">Admin Display</a></li>
                    <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="connection.php">connection</a></li>
                    
                </ul>
            </nav>
        </header>
<?php } ?>
