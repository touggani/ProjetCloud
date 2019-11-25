<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="decoration.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("accueil.jpg");
  min-height: 100%;
}

.site-bar .site-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="site-top">
  <a href="#home"><img id="logo" src="cyberstation.png"></a>
  <div class="site-bar site-white site-card" id="myNavbar">
    

    <a href="#home" class="site-bar-item site-button site-wide"></a>
    <!-- Right-sided navbar links -->
    <div class="site-right site-hide-small">
      <a href="#about" class="site-bar-item site-button">A PROPOS</a>
      <a href="#work" class="site-bar-item site-button"><i class="fa fa-th"></i> PRESTATIONS</a>
      <a href="#pricing" class="site-bar-item site-button"><i class="fa fa-usd"></i> TARIFS</a>
      <a href="#contact" class="site-bar-item site-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="site-bar-item site-button site-right site-hide-large site-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="site-sidebar site-bar-block site-black site-card site-animate-left site-hide-medium site-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="site-bar-item site-button site-large site-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="site-bar-item site-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="site-bar-item site-button">PRESTATION</a>
  <a href="#work" onclick="w3_close()" class="site-bar-item site-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="site-bar-item site-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="site-bar-item site-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 site-display-container site-grayscale-min" id="home">
  <div class="site-display-left site-text-white" style="padding:48px">
    <span class="site-jumbo site-hide-small">Impression de qualité</span><br>
    <span class="site-large">Ne perdez plus votre temps ni votre argent</span>
  </div> 
</header>

<!-- About Section -->
<div class="site-container" style="padding:128px 16px" id="about">
  <h3 class="site-center" style="font-weight : bold;"><i style="color: red;">CYBER</i> STATION</h3>
  <div class="site-row-padding site-center" style="margin-top:64px">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    <div class="site-quarter" style="margin-left: 15%;">
      <i class="fa fa-heart site-margin-bottom site-jumbo"></i>
      <p class="site-large">Le client avant tout</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="site-quarter" >
      <i class="fa fa-cog site-margin-bottom site-jumbo"></i>
      <p class="site-large">Matériels haut de gamme</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="site-quarter" >
      <i class="fa fa-usd site-margin-bottom site-jumbo"></i>
      <p class="site-large">Prix attractifs</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>





<!-- Promo Section "Statistics" -->
<div class="site-container site-row site-center site-dark-grey site-padding-64">
  <div class="site-quarter">
    <span class="site-xxlarge">14+</span>
    <br>Postes
  </div>
  <div class="site-quarter">
    <span class="site-xxlarge">55+</span>
    <br>Prestations
  </div>
  <div class="site-quarter">
    <span class="site-xxlarge">89+</span>
    <br>Clients satisfaits
  </div>
  <div class="site-quarter">
    <span class="site-xxlarge">150+</span>
    <br>AUTRE
  </div>
</div>

<!-- Work Section -->
<div class="site-container" style="padding:128px 16px" id="work">
  <h3 class="site-center">PRESTATIONS</h3>
  <p class="site-center site-large">Les prestations que nous proposons aux clients</p>

  <div class="site-row-padding" style="margin-top:64px">
    <div class="site-col l3 m6">
      <img src="scanner.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Photocopie">
      <p>Photocopie</p>
    </div>
    <div class="site-col l3 m6">
      <img src="imprimante.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Impression">
      <p>Impression</p>
    </div>
    <div class="site-col l3 m6">
      <img src="reliure.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Reliures">
      <p>Reliures</p>
    </div>
    <div class="site-col l3 m6">
      <img src="document.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Plastification">
      <p>Plastification</p>
    </div>
  </div>

  <div class="site-row-padding site-section">
    <div class="site-col l3 m6">
      <img src="fax.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Fax service">
      <p>Fax service</p>
    </div>
    <div class="site-col l3 m6">
      <img src="sim.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Cartes prépayées">
      <p>Cartes prépayées</p>
    </div>
    <div class="site-col l3 m6">
      <img src="at.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Internet">
      <p>Internet</p>
    </div>
    <div class="site-col l3 m6">
      <img src="bureautique.png" onclick="onClick(this)" class="site-hover-opacity taille" alt="Bureautique">
      <p>Bureautique</p>
    </div>
    <div style="margin-bottom: -100px;margin-left: 32%;">
      <img src="pickup.png" style="width: 400px;">
      <p style="margin-top: -70px;margin-left:14.5%;">Point relai pour vos colis</p>
    </div>
  </div>

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="site-modal site-black" onclick="this.style.display='none'">
  <span class="site-button site-xxlarge site-black site-padding-large site-display-topright" title="Close Modal Image">×</span>
  <div class="site-modal-content site-animate-zoom site-center site-transparent site-padding-64">
    <img id="img01" class="site-image">
    <p id="caption" class="site-opacity site-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="site-container site-light-grey site-padding-64">
  <div class="site-row-padding">
    <div class="site-col m6">
      <h3>Nos atouts</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <div style="">
      <a href="https://www.yelp.fr/biz/cyberstation-lille"><img src="yelp.png" style="width: 270px;margin-left: 75%" onmousedown="return false" onmousemove="return false"></a>
      <span class="yelp-review" data-review-id="d_z_EANaYym1QuatzAj4mg" data-hostname="www.yelp.fr">Lire <a href="https://www.yelp.fr/biz/cyberstation-lille?hrid=d_z_EANaYym1QuatzAj4mg" rel="nofollow noopener">l'avis</a> de <a href="https://www.yelp.com/user_details?userid=OvjShk-JXRcglzyFF28lBQ" rel="nofollow noopener">Ludivine O.</a> sur <a href="https://www.yelp.com/biz/SesUTbVO3pJTLv2lYHqCrQ" rel="nofollow noopener">Cyberstation</a>  sur <a href="https://www.yelp.fr" rel="nofollow noopener">Yelp</a><script async="async" src="https://www.yelp.fr/embed/widgets.js" type="text/javascript"></script></span><br>
      <span class="yelp-review" data-review-id="SpdWAngSUCTEnQ18-uowxA" data-hostname="www.yelp.fr">Lire <a href="https://www.yelp.fr/biz/cyberstation-lille?hrid=SpdWAngSUCTEnQ18-uowxA" rel="nofollow noopener">l'avis</a> de <a href="https://www.yelp.com/user_details?userid=qQBB53GecuBd_XI9ximnmQ" rel="nofollow noopener">Wilfried R.</a> sur <a href="https://www.yelp.com/biz/SesUTbVO3pJTLv2lYHqCrQ" rel="nofollow noopener">Cyberstation</a>  sur <a href="https://www.yelp.fr" rel="nofollow noopener">Yelp</a><script async="async" src="https://www.yelp.fr/embed/widgets.js" type="text/javascript"></script></span>
    </div>
    </div>  
  </div>
</div>

<!-- Pricing Section -->
<div class="site-container site-center site-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>TARIFS</h3>
  <div class="site-row-padding" style="margin-top:64px">
    <div class="site-third site-section">
      <ul class="site-ul site-white site-hover-shadow">
        <li class="site-black site-xlarge site-padding-32">Impression & photocopie<br><small>(couleur)</small></li>
        <li class="site-padding-16"><b>À l'unité:</b> 60cts
          <br><b>30 copies: </b> 14€ 
          <br><b>100 copies: </b> 36€
          <br><b>300 copies: </b> 90€
          <br><b>500 copies: </b> 135€
          <br><b>1000 copies: </b> 240€
          <br><b>2000 copies: </b> 400€</li>
        <li class="site-padding-16"><b>À partir de</b> 0,60€</li>
        <li class="site-padding-16"><b>Dégressif jusqu'a</b> 0,14€</li>
        <li class="site-light-grey site-padding-24"></li>
      </ul>
    </div>
    <div class="site-third site-section">
      <ul class="site-ul site-white site-hover-shadow">
        <li class="site-black site-xlarge site-padding-32">Impression & photocopie<br><small>(noir et blanc)</small></li>
        <li class="site-padding-16"><b>À l'unité:</b> 60cts
        <br><b>30 copies: </b> 14€ 
          <br><b>100 copies: </b> 36€
          <br><b>300 copies: </b> 90€
          <br><b>500 copies: </b> 135€
          <br><b>1000 copies: </b> 240€
          <br><b>2000 copies: </b> 400€</li>
        <li class="site-padding-16"><b>À partir de</b> 0,07€</li>
        <li class="site-padding-16"><b>Dégressif jusqu'a</b> 0,013€</li>
        <li class="site-light-grey site-padding-24"></li>
      </ul>
    </div>
    <div class="site-third site-section">
      <ul class="site-ul site-white site-hover-shadow">
        <li class="site-black site-xlarge site-padding-32">Autre<br><small>(reliure, internet ...)</small></li>
        <li class="site-padding-16"><b>50GB</b> Storage</li>
        <li class="site-padding-16"><b>50</b> Emails</li>
        <li class="site-padding-16"><b>50</b> Domains</li>
        <li class="site-padding-16"><b>Endless</b> Support</li>
        <li class="site-light-grey site-padding-24"></li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="site-container site-light-grey" style="padding:128px 16px" id="contact">
  <h3 style="margin-left: 23%">CONTACT</h3>
  <p class="site-center site-large"></p>
  <div style="margin-left: 16% ;margin-top:20px; position: absolute;">
    <p><i class="fa fa-map-marker fa-fw site-xxlarge site-margin-right"></i> 10 Place Déliot, 59800 Lille</p>
    <p><i class="fa fa-phone fa-fw site-xxlarge site-margin-right"></i> 03 20 90 97 69</p>
    <br>
    
    
  <div>
    <hr class="separation" />
  </div>
  </div>
  <div style="margin-left: 60%; margin-top: -5%;">
    <ul>
        <h3>HORAIRE D'OUVERTURE</h3>
        <div style="margin-left: 10%;">
          <br>Lundi <b style="margin-left: 49px;">8H00-20H00</b> 
          <br>Mardi <b style="margin-left: 49px;">8H00-20H00</b> 
          <br>Mercedi <b style="margin-left: 32px;">8H00-20H00</b> 
          <br>Vendredi <b style="margin-left: 26px;">8H00-20H00</b> 
          <br>Samedi <b style="margin-left: 37px;">8H30-16H00</b> 
          <br>Dimanche <b style="margin-left: 20px;">FERMÉ</b></li>
        </div>
    </ul>
  </div><a href="https://www.google.com/maps/place/10+Place+D%C3%A9liot,+59000+Lille/@50.6198278,3.0680272,17.69z/data=!4m5!3m4!1s0x47c2d595c4a1ec71:0xe5deedfaab4bad85!8m2!3d50.6199641!4d3.0680747"><img src="localisation.png" class="site-image site-greyscale" style="width:100%;margin-top:48px"></a>
</div>

<!-- Footer -->
<footer class="site-center site-black site-padding-64">
  <a href="#home" class="site-button site-light-grey"><i class="fa fa-arrow-up site-margin-right"></i>Top</a>
  <div class="site-xlarge site-section">
    <a href="https://www.yelp.fr/biz/cyberstation-lille"><i class="fa fa-yelp site-hover-opacity"></i></a>
  </div>
  <p><a href="https://www.linkedin.com/in/youssef-touggani-b54248143/" title="W3.CSS" target="_blank" class="site-hover-text-green">YOUSSEF TOUGGANI © 2019 - Tous droits réservés.</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
