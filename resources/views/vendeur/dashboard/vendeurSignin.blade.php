<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leftover Login</title>
    <link rel="stylesheet" href="{{ asset('css/vendeur/vendeurSignin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="{{ asset('js/vendeur/vendeurSignin.js') }}" defer></script>
</head>
<body>
            <div class="row">
                <div class="col-md-6 side-image">
                    <div class="text">
                        <h3>SE CONNECTER  À MYSTORE<i><br>- Leftover</i></h3>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Connectez-vous à votre compte</header>
                        <div class="input-field">
                            <input type="email" class="input" id="email"  placeholder="Mystore@gmail.com" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="myinput"  placeholder="Password" required>
                            <label for="password">Password</label>
                            <span class="eye" onclick="ShowPassword()">
                                <i class="fa fa-eye" id="hide1" ></i>
                                <i class="fa fa-eye-slash" id="hide2"></i>
                                </span>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Se Connecter">
                            
                        </div>
                        <div class="signin">
                            <span><a  href="{{ url('/reset-password') }}">Mot de passe oublié ?</a></span>
                        </div>
                     </div>
                </div>
            </div>

</body>
</html>