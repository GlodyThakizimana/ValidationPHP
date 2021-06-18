<?php
session_start();
if(isset($_POST['posted']) && $_POST['posted'] == "true")
{
    print_r($_POST);
    $_SESSION['admin_display']['display_interet'] =  array_key_exists('centre_interet', $_POST) && $_POST['centre_interet'] == 'display_interet';
    $_SESSION['admin_display']['display_tiramisu'] = array_key_exists('tiramisu', $_POST) && $_POST['tiramisu'] == 'display_tiramisu';
    $_SESSION['admin_display']['display_pizza'] = array_key_exists('pizza', $_POST) && $_POST['pizza'] === 'display_pizza';
}