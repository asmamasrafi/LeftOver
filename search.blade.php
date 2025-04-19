<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
    <title>LEFTOVER</title>
    <link rel="stylesheet" href="client.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <script src="https://kit.fontawesome.com/3929e16ef5.js" crossorigin="anonymous"></script>
   <script src="{% static 'network/functions.js' %}"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
<script src="client.js" defer></script>

<link href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">



<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'><!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="search.css" />
    
<!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <h3 class="logo"  onclick="document.location='client.html'">Leftover<span class="span">•</span>
       
    </h3>
  <body>
    <div class="wrapper">
      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Taper le nom de commerce ici.."
        />
        <button id="search">Recherche</button>
      </div>
      <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">TOUS</button>
        <i class="fa fa-sliders"></i>
        <button class="button-value" onclick="filterProduct('Topwear')">
          restaurant
        </button>
        <button class="button-value" onclick="filterProduct('Bottomwear')">
          cafee
        </button>
        <button class="button-value" onclick="filterProduct('Jacket') "style="background-color:hsla(165, 77%, 17%, 0.1) ;">
          patesserie
        </button>
      
      </div>
      <div id="products"></div>
    </div>
    <!-- Script -->
    <script src="search.js"></script>
  </body>
</html>