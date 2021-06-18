<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Accueil</title>
</head>

<body>
<?php require 'templates/header.php' ?>

<?php if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'])
    {
        require_once('admin_form.php');
    }
?>

</div>




























    
</body>

</html>

