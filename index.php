<?php
include('db.php');
$stmt = $pdo->query("SELECT * FROM produits");
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon E-commerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur notre E-commerce</h1>
        <a href="panier.php">Voir le panier</a>
    </header>

    <section class="produits">
        <?php foreach ($produits as $produit): ?>
            <div class="produit">
                <img src="images/<?php echo $produit['image']; ?>" alt="<?php echo $produit['nom']; ?>">
                <h2><?php echo $produit['nom']; ?></h2>
                <p><?php echo $produit['description']; ?></p>
                <p><?php echo number_format($produit['prix'], 2, ',', ' ') . ' €'; ?></p>
                <a href="ajouter_panier.php?id=<?php echo $produit['id']; ?>">Ajouter au panier</a>
            </div>
        <?php endforeach; ?>
    </section>
</body>
</html>
