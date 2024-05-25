<?php
include __DIR__ . '/vistas/header.php';
session_start();
$do = isset($_GET['do']) ? $_GET['do'] : null;
switch ($do) {
    default:
        include __DIR__ . '/vistas/inicio.php';
        break;
    case 'sabores':
        include __DIR__ . '/vistas/sabores.php';
        break;
    case 'tamano':
        if (isset($_GET['sabor'])) {
            $_SESSION['sabor'] = $_GET['sabor'];
        }
        include __DIR__ . '/vistas/tamano.php';
        break;
    case 'hielo':
        if (isset($_GET['tamano'])) {
            $_SESSION['tamano'] = $_GET['tamano'];
        }
        include __DIR__ . '/vistas/hielo.php';
        break;

    case 'final':
        if (isset($_GET['hielo'])) {
            $_SESSION['hielo'] = $_GET['hielo'];
        }
        include __DIR__ . '/vistas/final.php';
        break;
    case 'reiniciar':
        session_destroy();
        session_start();
        include __DIR__ . '/vistas/inicio.php';
        break;
}

include __DIR__ . '/vistas/footer.php';
?>
