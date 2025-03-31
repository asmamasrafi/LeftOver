
<?php
try {
    $dsn = "mysql:host=localhost;dbname=e-commerce;charset=utf8";
    $username = "root";
    $password = "";

    // Création de l'objet PDO avec des options
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active les exceptions en cas d'erreur SQL
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération par défaut (tableau associatif)
        PDO::ATTR_EMULATE_PREPARES => false, // Désactive l'émulation des requêtes préparées (meilleure sécurité)
    ]);

    echo "Connexion réussie !";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


?>

