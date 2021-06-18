<?php session_start();
include('handle_form.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>admin</title>
</head>

<body>
    <?php include("templates/header.php") ?>
        <section class="cc-menu merriweather py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php if($_SESSION['admin_display']['display_pizza']): ?>
                    <div class="col">
                        <div class="card">
                            <img src="images/pizza.webp" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">La pizza</h5>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                    <?php if($_SESSION['admin_display']['display_tiramisu']): ?>
                    <div class="col">
                        <div class="card">
                            <img src="images/tiramisu.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Le tiramisu</h5>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                    <?php if($_SESSION['admin_display']['display_interet']): ?>

                    <div class="col d-sm-none d-md-block">
                        <div class="card">
                            <img src="images/dinner.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Centre d'interet</h5>
                            </div>
                        </div>
                    </div>
                    <?php endif?>
                </div>
            </div>
        </section>
        
</body>

</html>