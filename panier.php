<?php
session_start();
include('db.php');

if (!isset($_SESSION['panier']) || empty($_SESSION['panier'])) {
    echo "Votre panier est vide.";
    exit;
}

$ids_produits = implode(',', array_keys($_SESSION['panier']));
$stmt = $pdo->query("SELECT * FROM produits WHERE id IN ($ids_produits)");
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Votre Panier</h1>
        <a href="index.php">Retour à l'accueil</a>
    </header>

    <table>
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
        <?php foreach ($produits as $produit): ?>
            <tr>
                <td><?php echo $produit['nom']; ?></td>
                <td><?php echo $_SESSION['panier'][$produit['id']]; ?></td>
                <td><?php echo number_format($produit['prix'] * $_SESSION['panier'][$produit['id']], 2, ',', ' ') . ' €'; ?></td>
                <td><a href="supprimer_panier.php?id=<?php echo $produit['id']; ?>">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Total : <?php 
        $total = 0;
        foreach ($produits as $produit) {
            $total += $produit['prix'] * $_SESSION['panier'][$produit['id']];
        }
        echo number_format($total, 2, ',', ' ') . ' €';
    ?></p>
</body>
</html>
