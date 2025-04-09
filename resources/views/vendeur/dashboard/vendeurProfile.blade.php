<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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
    <link rel="stylesheet" href="{{ asset('css/vendeur/vendeurProfile.css') }}">

    
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
          <p> Une vue globale sur votre Compte et Informations</p>
        </div>
         <div>
            <div class="container-xl px-4 mt-4">

                <nav class="nav nav-borders">
                    <a class="nav-link  active ms-0" href="{{ url('/vendeur/profile') }}" target="__blank">Profile</a>
                    <a class="nav-link" href="{{ url('/vendeur/security') }}" target="__blank">Sécurité</a>
                    <a class="nav-link" href="{{ url('/vendeur/preference') }}"target="__blank">Notifications</a>
                </nav>
                    <hr class="mt-0 mb-4">
                    <div class="row">
                   
                    <div class="col-xl-8">
                    
                    <div class="card mb-4">
                    <div class="card-header">Information Generale</div>
                    <div class="card-body">
                    <form>
                    
                    <div class="mb-3">
                    <label class="small mb-1" for="inputUsername">Nom du propriétaire</label>
                    <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="Mohammed Sabor">
                     </div>
                     <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Adresse E-mail</label>
                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <hr style="height:1px;border-width:0;color:gray;background-color:gray"> 

                    <div class="card-header-1">Information sur localisation</div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Nom et numéro de rue</label>
                        <input class="form-control" id="inputEmailAddress" type="text" placeholder="Enter your email address" value=" Hay Salam 2039">
                        </div>

                    <div class="row gx-3 mb-3">
                    
                    <div class="col-md-6">
                    <label class="small mb-1" for="inputPhone">Code Postale</label>
                    <input class="form-control" id="inputPhone" type="text" placeholder="Enter votre  numero de Telephone" value="555">
                    </div>

                    <div class="col-md-6">
                        <label class="small mb-1" for="inputLocation">Ville</label>
                        <input class="form-control" id="inputLocation" type="text" placeholder="Enter votre localisation" value="Agadir , Maroc">
                        </div>
                    </div>

                    <hr style="height:1px;border-width:0;color:gray;background-color:gray"> 
                  
                    <div class="card-header-1">Information sur votre commerce</div>

                    <div class="mb-3">
                    <label class="small mb-1" for="inputEmailAddress">Décrivez vos activités et votre expertise en détail 
                        afin que les utilisateurs puissent comprendre vos activités. </label>
                    <textarea class="form-control" id="inputEmailAddress" placeholder="Entrer une petite description" ></textarea>
                    </div>
                    
                    
                    
                    <button class="btn" type="button">Enregistrer Modifications</button>
                    </form>
                    </div>
                    </div>
                    </div>

                    <div class="col-xl-4">
                    
                        <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Logo du commerce</div>
                        <div class="card-body text-center">
                        
                            <div class="profile-pic-div">
                                <img src="data:image/png;base64,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" id="photo">
                                <input type="file" id="file">
                                <label for="file" id="uploadBtn">Télécharger une nouvelle image</label>
                              </div>
                        
                        </div>
                        </div>
                        </div>
                    </div>
                     
                    <div class="card mb-4 mb-xl-0" style="height:max-content;">
                        <div class="card-header">Visuels du compte</div>
                        <label class="small mb-1" for="inputEmailAddress" style="margin-left: 20px; margin-top: 20px; margin-bottom: 15px;">Ici , vous pouvez upload des images concernant  votre Menu / Commerce 
                            afin que les utilisateurs Avoir une idee sur vos activités. </label>
                         <div class="padd">

                        <label class="card-header-1" for="input-address">Image de fond</label>
                        <div class="upload-box">
                          <div class="upload-img">
                              <img src="" alt="">
                          </div>
                          <label for="upload-input" class="upload-label">Choisie une image</label>
                          <input type="file"  id="upload-input" accept="images/*" class="btn btn-primary">
                         </div>
                          <br>
                          <hr style="height:1px;border-width:0;color:gray;background-color:gray"> 
                          <br>
                          <label class="card-header-1" for="input-address">Images du menu</label>
                          <div class="card">
                              
                              <div class="drag-area">
                                  <span class="visible">
                                      Glisser/déposer l'image ici ou
                                      <span class="select" role="button">parcourir vos fichier</span>
                                  </span>
                                  <span class="on-drop"></span>
                                  <input name="file" type="file" class="file" multiple  hidden/>
                              </div>
                      
                              <!-- IMAGE PREVIEW CONTAINER -->
                              <div class="container"></div>
                              
                          </div>
                          <button class="btn" type="button" style="padding-bottom: 10px;">Enregistrer les modifications </button>
                          
                        </div>
                        <br>
                    </div>
                    <br>
                    </div>
                    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
                    <script type="text/javascript">
                        
                    </script>
                    <script src="{{ asset('js/vendeur/vendeurProfile.js') }}"></script>
        </body>
</html>