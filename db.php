<?php
$host = 'localhost';
$dbname = 'db';        // Assurez-vous que cette base de données existe
$username = 'root';            // Nom d'utilisateur pour MySQL
$password = '';                // Mot de passe, vide par défaut pour XAMPP

// Créer la connexion PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Vérifier la connexion
if ($pdo) {
    echo "Connexion réussie à la base de données!";
} else {
    echo "Échec de la connexion à la base de données.";
}
?>

