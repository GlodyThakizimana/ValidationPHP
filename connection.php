<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/index.css">
    <title>Connection</title>
</head>


<body>
    <?php require 'templates/header.php' ?>
    <form action="controllers/login.php" method="POST">
        <div id="container">
            <div class="row mb-2">
                <div class="col"></div>
                <legend class="col ">Connection !</legend>
                <div class="col"></div>
            </div>
            <div class="nom row  mb-3">
                <div class="col"></div>
                <label for="nam" class="col-1">Nom</label>
                <input type="text" class="col-3" id="name" name="username" placeholder="Nom">
                <div class="col"></div>
            </div>
            <div class="password row  mb-2">
                <div class="col"></div>
                <label for="pass" class="col-2">Entrée votre mot de passe </label>
                <input class="col-3" type="password" id="pass" name="password"  placeholder="mot de passe" required>
                <div class="col"></div>
            </div>
            
            <div class="row  mb-3">
            <div class="col"></div>
            <button type="submit" class="col-2 btn btn-primary">Se connecter</button>
            <div class="col"></div>
        </div>
        </div>
    </form>
    </div>
   
</body>

</html>