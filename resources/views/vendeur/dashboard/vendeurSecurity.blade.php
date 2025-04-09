<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sécurité</title>

    <!-- Box Icons  -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <!-- Styles  -->
    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    	<!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/vendeur/vendeurSecurity.css') }}"/>
</head>


<body>
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bxl-xing'></i>
            <div class="logo-name">Mister Cook</div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/vendeur/dashboard') }}" class="link">
                        <i class='bx bxs-store-alt'></i>
                        <span class="name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/vendeur/dashboard') }}" class="link submenu-title">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            
            
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/vendeur/programmation') }}" class="link">
                        <i class='bx bxs-hourglass-bottom' ></i>
                        <span class="name">Programmation</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/vendeur/programmation') }}" class="link submenu-title">Programmation</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="{{ url('/vendeur/paquet') }}" class="link">
                        <i class='bx bx-package'></i>
                        <span class="name">Paquets</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="{{ url('/vendeur/paquet') }}" class="link submenu-title">Paquets</a>
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/vendeur/analytics') }}" class="link">
                        <i class='bx bxs-pie-chart-alt-2'></i>
                        <span class="name">Analytics</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/vendeur/analytics') }}" class="link submenu-title">Analytics</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/vendeur/profile') }}" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Paramètres</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/vendeur/profile') }}" class="link submenu-title">Paramètres</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/vendeur/signin') }}" class="link">
                        <i class='bx bxs-door-open'></i>
                        <span class="name">logout</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/vendeur/signin') }}"  class="link submenu-title">Logout</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home" >
        <div class="toggle-sidebar" >
          <p> Une vue globale sur votre Compte et Informations</p>
        </div>
         <div>
            <div class="container-xl px-4 mt-4">

                <nav class="nav nav-borders">
                    <a class="nav-link " href="{{ url('/vendeur/profile') }}" target="__blank" style="margin-left: 0; margin-right: 25px;">Profile</a>
                    <a class="nav-link active ms-0" href="{{ url('/vendeur/security') }}" target="__blank">Sécurité</a>
                    <a class="nav-link" href="{{ url('/vendeur/preference') }}" target="__blank">Notifications</a>
                </nav>
                <hr class="mt-0 mb-4">
                <div class="row">
                <div class="col-lg-8">
                
                <div class="card mb-4">
                <div class="card-header">Modifier le mot de passe</div>
                <div class="card-body">
                <form>
                
                <div class="mb-3">
                <label class="small mb-1" for="currentPassword">Mot de passe actuel</label>
                <input class="form-control" id="currentPassword" type="password" placeholder="Enter Mot de passe actuel">
                </div>
                
                <div class="mb-3">
                <label class="small mb-1" for="newPassword">Nouveau mot de passe</label>
                <input class="form-control" id="newPassword" type="password" placeholder="Enter Nouveau mot de passe">
                </div>
                
                <div class="mb-3">
                <label class="small mb-1" for="confirmPassword">Confirmer le mot de passe</label>
                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirmer Nouveau mot de passe">
                </div>
                <button class="btn" type="button">Enregistrer</button>
                </form>
                </div>
                </div>
                
                
                </div>
                <div class="col-lg-4">
                
                
                
                <div class="card mb-4">
                <div class="card-header">Supprimer le compte</div>
                <div class="card-body">
                <p>La suppression de votre compte est une action permanente qui ne peut être annulée. Si vous êtes sûr de vouloir supprimer votre compte, sélectionnez le bouton ci-dessous.</p>
                <button class="btn-annuler" type="button">Je comprends, supprimer mon compte</button>
                </div>
                </div>
                </div>
                </div>
                </div>
         </div>
    </section>
   <!-- Link JS -->
   <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{ asset('js/vendeur/vendeurSecurity.js') }}"></script>
</body>
</html>