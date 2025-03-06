<?php
session_start();
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Vérifier si le panier existe déjà
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    // Ajouter le produit au panier
    if (!isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id] = 1;
    } else {
        $_SESSION['panier'][$id]++;
    }

    header("Location: index.php");
    exit();
}
?>
