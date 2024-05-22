<?php
include __DIR__ .'/vistas/header.php';
$action= $_GET['action'] ?? 'default';
switch($action){
    case 'default':
        include __DIR__ .'/vistas/final.php';
        break;
    case 'reiniciar':
        include __DIR__ .'/vistas/inicio.php';
        $_SESSION['runs'] = 0;
    break;
}
include __DIR__ .'/vistas/footer.php';   
?>