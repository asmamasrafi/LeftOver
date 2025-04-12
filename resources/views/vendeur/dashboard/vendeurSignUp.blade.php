<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Vendeur Sign-up</title>
  <link rel="stylesheet" href="{{ asset('css/vendeur/vendeurSignUp.css') }}">
  <script src="{{ asset('js/vendeur/vendeurSignUp.js') }}"defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
  <meta name="vendeur-register-route" content="{{ route('vendeur.register') }}">
</head>
<body>

<form id="multisteps" method="POST" enctype="multipart/form-data" data-multi>

    @csrf

    <!-- ÉTAPE 1 -->
    <div class="data active" data-step>
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                   <video autoplay muted loop>
                      <source src="images/production ID 4252295.mp4" type="video/mp4">
                   </video>
                   <h3 data-title="tcard" class="titlecard"> -transformer les excédents alimantaires en revenus</h3>   
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                    <h2 class="logo">Inscrivez-vous<span>.</span></h2>
                        <div class="input-field">
                            <input type="text" name="owner" class="input" id="owner" required>
                            <label for="owner">Nom du propriétaire</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="business" class="input" id="business" required>
                            <label for="business">Nom de l'entreprise</label>
                        </div>

                        <div class="input-field">
                            <input type="tel" name="phone" id="phone" class="input" required>
                            <label for="phone">Téléphone</label>
                        </div>

                        <div class="input-field">
                            <input type="email" name="email" id="email" class="input" required>
                            <label for="email">Adresse E-mail</label>
                        </div>

                        <div class="input-field">
                            <button class="btn-primary" type="button" data-next>
                                <span data-next>Suivant</span>
                            </button>
                        </div>

                        <div class="signin">
                            <span>Vous avez déjà un compte? <a href="{{ url('/vendeur/signin') }}">S'authentifier</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- ÉTAPE 2 -->
 <div class="data" data-step>
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image2" style="background-color: #114D4D; border-radius: 10px;">
                    <h3 data-title="tcard" class="titlecard2">- Commencez le changement aujourd'hui !</h3>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <h2 class="logo">Vous êtes presque arrivés<span>.</span></h2>

                        <div class="input-field">
                            <input type="text" name="street" class="input" id="street" required>
                            <label for="street">Nom et numéro de rue</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="city" class="input" id="city" required>
                            <label for="city">Ville</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="postal_code" class="input" id="postal_code" required>
                            <label for="postal_code">Code Postal</label>
                        </div>

                        <div class="input-field">
                            <input type="password" class="input" name="password" id="password" required>
                            <label for="password">Mot de passe</label>
                            <span class="eye" onclick="ShowPassword()">
                                <i class="fa fa-eye" id="hide1"></i>
                                <i class="fa fa-eye-slash" id="hide2"></i>
                            </span>
                        </div>

                        <div class="input-field-div2">
                            <button class="btn-secondary" type="button">
                                <span data-prev>Précédent</span>
                            </button>
                            <button class="btn-primary" type="button" data-next>
                                <span data-next>Suivant</span>
                            </button>
                        </div>

                        <div class="terms">
                            <input type="checkbox" id="terms" name="terms" value="terms" checked>
                            <label for="terms">J'accepte <a href="#" class="lol">les termes & conditions</a> de Leftover.</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ÉTAPE 3 -->
<div class="data"  data-step>
    <div class="container main" >
        <div class="row">
            <div class="col-md-6 side-image3">

                <div class="cover-hader-site">
                    <label class="headlbl">Importer une photo de votre commerce ! </label>
                    <img src="{{ asset('images/fideliser-clients-restaurant.png') }}" alt="Votre image">

				   <div class="cover-image-div">
					<div class="cover-image-edite-btn">
                                <input type="file" name="photo">
                                <i class = "fa fa-camera" style = "color: #fff;"></i>
					</div>
				</div>
                </div>

                <div class="col-md-6 right2">
                    
                    <div class="input-box2">
                        <div class="container">
                            <label class="headlbl">Activité</label>
                            <div class="select-menu">
                                <div class="select">
                                  <span class="je">J'ai...</span>
                                  <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="options-list">
                                  <div class="option" data-value="Restaurant">Restaurant</div>
                                  <div class="option" data-value="Patisserie">Patisserie</div>
                                  <div class="option" data-value="Cafeteria">Cafeteria</div>
                                  <div class="option" data-value="Boulangerie">Boulangerie</div>
                                  <div class="option" data-value="Snack">Snack</div>
                                </div>
                            </div>
                            <input type="hidden" name="activity" id="activity">
                            <script>
                                const select = document.querySelector(".select");
                                const options_list = document.querySelector(".options-list");
                                const options = document.querySelectorAll(".option");
                                
                            
                                //show & hide options list
                                select.addEventListener("click", () => {
                                  options_list.classList.toggle("active");
                                  select.querySelector(".fa-angle-down").classList.toggle("fa-angle-up");
                                });
                            
                                //select option
                                options.forEach((option) => {
                                  option.addEventListener("click", () => {
                                    options.forEach((option) => {option.classList.remove('selected')});
                                    select.querySelector("span").innerHTML = option.innerHTML;
                                    option.classList.add("selected");
                                    options_list.classList.toggle("active");
                                    select.querySelector(".fa-angle-down").classList.toggle("fa-angle-up");
                                   
                                  });
                                });
                              </script>
                        </div>
                    </div>
              </div>  
        
         <label class="headlbl" style="margin-left: 30px; ">Quels les jours d'ouverture de votre commerce ? </label>
         <div class="multi-select-tag">
             <div class="multi-select">
             <select name="days_open[]" id="jours" multiple required>
                 <option value="lundi">Lundi</option>
                 <option value="mardi">Mardi</option>
                 <option value="mercredi">Mercredi</option>
                 <option value="jeudi">Jeudi</option>
                 <option value="vendredi">Vendredi</option>
                 <option value="samedi">Samedi</option>
                 <option value="demanche">Dimanche</option>
             </select>
           </div>
           <div class="input-field-div2"  >
            <button class="btn-secondary" type="button">
                <span data-prev>précédent</span>
            </button >
            <button class="btn-primary" type="button" data-save>
                <span data-save>Sauvgarder</span>
            </button >
        </div>
        </div>
</div>


</form>
<div class="col-md-6 right3">
            <div class="input-box3">                
                    <label class="headlbl">Pouvez-vous préciser à quel moment les clients peuvent venir chercher leur commande ? </label>
                     <p>Si vous ne savez pas encore quand, vous pouvez sauter cette étape pour la remettre à plus tard. </p>
                    <div class="pickuphour">
                      <div class="days">
                        <label class="leday">Lundi</label>
                        <div class="time">
                         <div class="input-field2">
                             <input type="text" class="input timeouv" id="timeouv" placeholder="00:00"> 
                             <label for="timeouv">De</label>
                         </div>
                         <div class="input-field2">
                             <input type="text" class="input timefer" id="timefer" placeholder="00:00">
                             <label for="timefer">À</label>
                         </div></div>
                      </div>


                      <div class="days">
                        <label class="leday">Mardi</label>
                        <div class="time">
                         <div class="input-field2">
                             <input type="text" class="input timeouv" id="timeouv" placeholder="00:00"> 
                             <label for="timeouv">De</label>
                         </div>
                         <div class="input-field2">
                             <input type="text" class="input timefer" id="timefer" placeholder="00:00">
                             <label for="timefer">À</label>
                         </div></div>
                      </div>


                      <div class="days">
                        <label class="leday">Mercredi</label>
                        <div class="time">
                         <div class="input-field2">
                             <input type="text" class="input timeouv" id="timeouv" placeholder="00:00"> 
                             <label for="timeouv">De</label>
                         </div>
                         <div class="input-field2">
                             <input type="text" class="input timefer" id="timefer" placeholder="00:00">
                             <label for="timefer">À</label>
                         </div></div> 
                      </div>

                      <div class="days">
                        <label class="leday">Jeudi</label>
                        <div class="time">
                         <div class="input-field2">
                             <input type="text" class="input timeouv" id="timeouv" placeholder="00:00"> 
                             <label for="timeouv">De</label>
                         </div>
                         <div class="input-field2">
                             <input type="text" class="input timefer" id="timefer" placeholder="00:00">
                             <label for="timefer">À</label>
                         </div></div> 
                      </div>
                      <div class="days">
                        <label class="leday">Vendredi</label>
                        <div class="time">
                         <div class="input-field2">
                             <input type="text" class="input timeouv" id="timeouv" placeholder="00:00"> 
                             <label for="timeouv">De</label>
                         </div>
                         <div class="input-field2">
                             <input type="text" class="input timefer" id="timefer" placeholder="00:00">
                             <label for="timefer">À</label>
                         </div></div>
                      </div>
                      <div class="days">
                        <label class="leday">Samedi</label>
                        <div class="time">
                         <div class="input-field2">
                             <input type="text" class="input timeouv" id="timeouv" placeholder="00:00"> 
                             <label for="timeouv">De</label>
                         </div>
                         <div class="input-field2">
                             <input type="text" class="input timefer" id="timefer" placeholder="00:00">
                             <label for="timefer">À</label>
                         </div></div>
                      </div>
                      <div class="days">
                        <label class="leday">Dimanche</label>
                        <div class="time">
                         <div class="input-field2">
                             <input type="text" class="input timeouv" id="timeouv" placeholder="00:00"> 
                             <label for="timeouv">De</label>
                         </div>
                         <div class="input-field2">
                             <input type="text" class="input timefer" id="timefer" placeholder="00:00">
                             <label for="timefer">À</label>
                         </div></div>
                      </div>    
                    </div>        
         </div>
  </div> 
</div>

<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
<script>
    new MultiSelectTag('jours')  // id
</script>
</body>

</html>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
