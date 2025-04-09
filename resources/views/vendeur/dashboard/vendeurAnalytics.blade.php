<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>

    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
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
    <link rel="stylesheet" href="{{ asset('css/vendeur/vendeurAnalytics.css') }}">
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
                    <a href="{{ url('/vendeur/signin') }}" class="link submenu-title">Logout</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home" >
        <div class="toggle-sidebar" >
          <p>Bienvenue sur statistiques , Cette page vous donne un aperçu de la performance de votre commerce sur Leftover</p>
        </div>
       
        
        <div class="box">
            <div class="textbox">
                <h3>Statistiques depuis le début du partenariat</h3>
                <p> Voici un aperçu de vos résultats depuis que vous avez rejoint Leftover . Vous trouverez le nombre de paniers que vous avez sauvés, le total 
                    Gagné apartir de nourriture invendue et le nombre de vues de votre commerce dans l'application.</p>
            </div>
            <div class="container">
              <main class="grid">
                <article>
                  <div class="text">
                    <h3 class="tit">Vues</h3>
                    <h5 class="nbr">100</h5>
                  </div>
                </article>
                                                                                                                                                              
                <article>
              <div class="text">
                <h3 class="tit">Paniers sauvés</h3>
                <h5 class="nbr">1078</h5>
                  </div>
                </article>
                <article>
                
                  <div class="text">
                    <h3 class="tit">Total Gagné</h3>
                    <h5 class="nbr">1234<span style="color:rgb(5, 91, 4);">$</span></h5>
                  </div>
                </article>
                
                </main>
                </div>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray"> 
                <div class="textbox">
                    <h3>Statistiques du compte</h3>
                    <p> Voici un aperçu de vos Statistiques de Compte depuis que vous avez rejoint Leftover .</p>
                </div>
                <div class="charts-card">
                    <h2 class="chart-title">Analytics of your account</h2>
                    <div id="bar-chart"></div>
                </div>
        </div>
    
    </section>

   

    <!-- Link JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/vendeur/vendeurAnalytics.js') }}"></script>
</body>
</html>