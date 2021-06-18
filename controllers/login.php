<?php session_start();


 
$name = $_POST['username'];
$password = $_POST['password'];



if ($name === 'jon' && $password == '0000') {
    $_SESSION['pseudo'] = $name;
    $_SESSION['isConnected'] = true;
    header('Location: /');
    exit;
} elseif ($name === 'jon') {
    header('Location: /connection.php');
    exit;
    echo "Erreur sur le pseudo";
    
} elseif ($password === '0000') {
    header('Location: /connection.php');
    exit;
    echo "Erreur sur le mot de passe";
    
} else {
    header('Location: /connection.php');
    exit;
    echo "erreur sur le mot de passe et le nom d'utilisateur";
    
}



 $_SESSION['pseudo'] = $_POST['username']; 
 header('Location: /');
exit();