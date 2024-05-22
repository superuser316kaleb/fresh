<?php
include __DIR__ .'/vistas/header.php';
switch($action){
    default:
    session_start();
        include __DIR__ .'/vistas/inicio.php';
        break;
}
include __DIR__ .'/vistas/footer.php';   
?>