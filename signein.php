<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leftover-Login</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="signin.js" defer></script>
</head>
<body>
    <form method="post">
    <div class="container">
        <div class="box box-one">
            <h1 class="logo">
                Leftover<span class="span">.</span>
            </h1>
            <button class="btn btn-primary">
                <img src="imagess/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png" width="19">
                <span>S'authentifier avec Google</span>
            </button >
            <button class="btn btn-primary">
                <img src="imagess/icons8-facebook-48.png" width="19">
                <span>S'authentifier avec Meta</span>
            </button>
        </div>
        <h5>Ou Bien</h5>
        <div class="box box-two">
            <?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['authentifier'])) 
{
    // Récupération des champs
    $login = trim($_POST['login'] ?? '');
    $pass = $_POST['pass'] ?? '';

    // Vérification des champs
    if (!empty($login) && !empty($pass)) {
        require_once 'database.php';
        $checkUser = $pdo->prepare("SELECT * FROM utilisateur WHERE name = ? and password=? ");
        $checkUser->execute([$login, $pass]);
        if ($checkUser->rowCount() > 0) {
            session_start();
            $_SESSION['utilisateur']= $checkUser->fetch();
            header('location:home.php');
            exit;
        }
    }
    else {?>
        <div class="alert alert-danger" role="alert">utilisateur introvable !!!</div> 
        <?php
    }

}
            ?>
            
                <input type="text" placeholder="Phone ,Email Or Username" name="login"/>
           
            <div class="password">
                <input type="password" placeholder="Password" id="myinput" name="pass"/>
                <span class="eye" onclick="ShowPassword()">
                <i class="fa fa-eye" id="hide1" ></i>
                <i class="fa fa-eye-slash" id="hide2"></i>
                </span>
               
            </div>  
            <input type="submit"  style="background-color: darkgreen; color: white; margin-top: 7px;" value="S'authentifier" name="authentifier">
            <br>
            <button  class="btn btn-primary">Mot de passe oublié</button>
        </div>
        <br>
        <p>Vous n'avez pas de compte ?<a href="signeup.php" style="color: rgb(255, 134, 21);">S'inscrire</a></p>
    </div>
    </form>

</body>
</html>