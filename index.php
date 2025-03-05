<?php
// Inclure la connexion à la base de données
include('db.php');

// Inclure l'en-tête (header) de votre site
include('includes/header.php');

// Inclure d'autres fichiers PHP selon vos besoins
include('page.php');          // Inclut une page spécifique
include('supprimer_panier.php');  // Inclut la logique pour supprimer un produit du panier
include('panier.php');         // Inclut la logique pour afficher le panier
include('ajouter_panier.php');  // Inclut la logique pour ajouter un produit au panier

// Exemple de logique PHP : afficher un message de bienvenue
echo "Bienvenue sur la page d'accueil !";

// Inclure le pied de page (footer) de votre site
include('includes/footer.php');
?>
