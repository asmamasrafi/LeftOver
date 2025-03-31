<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SignUpForClient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="SignUpForClient.js" defer></script>
    <title>Sign-Up</title>
</head>
<body>

<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['creer'])) {
    // Récupération des champs
    $login = trim($_POST['login'] ?? '');
    $contact = trim($_POST['contact'] ?? '');
    $pass = $_POST['pass'] ?? '';
    $conf = $_POST['conf'] ?? '';
    $local = trim($_POST['local'] ?? '');

    // Vérification des champs
    if (empty($login) || empty($contact) || empty($pass) || empty($conf) || empty($local)) {
        $errors[] = "Tous les champs sont obligatoires.";
    }

    // Vérification du mot de passe
    if ($pass !== $conf) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    }

    if (empty($errors)) {
        require_once 'database.php';

        // Vérification si l'utilisateur existe déjà
        $checkUser = $pdo->prepare("SELECT COUNT(*) FROM utilisateur WHERE name = ?");
        $checkUser->execute([$login]);
        if ($checkUser->fetchColumn() > 0) {
            $errors[] = "Ce login est déjà utilisé, choisissez-en un autre.";
        }

        if (empty($errors)) {
            // Hachage du mot de passe
            //$hashedPass = password_hash($pass, PASSWORD_DEFAULT);

            // Insertion dans la base de données
            $sqlState = $pdo->prepare('INSERT INTO utilisateur (name, email, password, localisation) VALUES (?, ?, ?, ?)');
            $inserted = $sqlState->execute([$login, $contact, $pass, $local]);

            if ($inserted) {
                echo '<div class="alert alert-success">✅ Inscription réussie !</div>';
                header(header:'location:signein.php');
            } else {
                $errors[] = "Erreur lors de l'inscription.";
            }
        }
    }
}
?>

<div class="container">
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="data active" style="padding-left: 50px;" data-step>
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6613.414079106111!2d-6.838022074631983!3d34.025730122452416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76b8a3e0acf2d%3A0xd98e433e52848e24!2sM%C3%A9dina%20de%20Rabat%2C%20Rabat!5e0!3m2!1sfr!2sma!4v1675718282786!5m2!1sfr!2sma"
                        width="100%" height="100%" style=" border-radius: 10px;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-md-6 right">
                        <div class="input-box">
                            <h2 class="logo">Inscrivez-vous<span>.</span></h2>

                            <div class="input-field">
                                <input type="text" class="input" id="nickname" name="login" required>
                                <label for="nickname">Nickname</label>
                            </div>

                            <div class="input-field">
                                <input type="text" class="input" id="email" name="contact" required>
                                <label for="email">E-mail ou Téléphone</label>
                            </div>

                            <div class="input-field">
                                <input type="password" class="input" id="myinput2" name="pass" required>
                                <label for="myinput2">Mot de passe</label>
                            </div>

                            <div class="input-field">
                                <input type="password" class="input" id="myinput" name="conf" required>
                                <label for="myinput">Confirmation du Mot de passe</label>
                            </div>

                            <div class="input-field">
                                <input type="text" class="input" id="localisation" name="local" required>
                                <label for="localisation">Localisation</label>
                            </div>

                            <div class="input-field">
                                <button type="button" class="btn btn-primary">Localiser-moi</button>
                                <input type="submit" value="Créer un compte" name="creer" class="btn btn-success">
                            </div>

                            <div class="signin">
                                <span>Vous avez déjà un compte ? <a href="signin.html">S'authentifier</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
