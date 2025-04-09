<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code de vérification </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="VerifieCode.css">
</head>
<body>

    <div class="row">
        <div class="col-md-6 side-image">
            <div class="text">
                <h3 style="text-transform: uppercase;">vérification du Compte</h3>
            </div>
        </div>
        <div class="col-md-6 right">
             <div class="input-box">
                <header>Code de vérification</header>
                 <label style="margin-left: 9px; font-size: small; color: rgb(8, 80, 56);">vous recevrez un e-mail avec un code de sécurité spécial à 6 chiffres</label>
                 <br><br><br>
                <div class="input-field">
                    <input type="text" class="input" id="code"  placeholder="000000" required autocomplete="off">
                    <label for="code">Code </label>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Valider">
                </div>
                <div class="signin">
                    <span><a href="{{ url('/vendeur/signin') }}">Annuler</a></span>
                </div>
             </div>
        </div>
    </div>

</body>
</html>
   
  
   
    <!--<div class ="form_container">
        <div class="overley">

        </div>
        <div class="titleDiv">
            <h1 class="title">Vérification du code</h1>
        </div> 
        
        
        <form action="" method="POST">
              <div class="rows">
                    <label for="username">Code</label>
                    <input type="text" id="usercode" name="usecode"
                    placeholder="Entrer le  Code" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="Confirmer" 
                    value="confirmer" required>
                
                <span class="registerLink">  <a href="index.php">Annuler</a></span>
            </div>

        </form>
    </div>

</body>
</html>-->