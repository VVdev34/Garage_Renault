<?php
function pdo_connect_mysql() {
    //Connection a la base de donnée
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'garage';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {

    	exit('Failed to connect to database!');
    }
}
// Template de la barre de navigation pour eviter de surcharger les pages
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="./css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navbar" id="acceuil">
    <input type="checkbox" id="nav-check">
        <img class="logo" src="./img/logo.png" alt="">
        <a href="#acceuil" class="nom">Garage Saint Fulcran </a>
        <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
        <div class="nav-links">
            <ul>
                <li  class="slide-line"><a href="index.php">Acceuil</a></li><span>|</span>
                <li class="slide-line"><a href="#vehicules">Véhicules</a></li><span>|</span>
                <li class="slide-line"><a href="#e&s">Entretien & Service</a></li><span>|</span>
                <li class="slide-line"><a href="#contact">Nous Contacter</a></li><span>|</span>
                <li class="slide-line"><a href="https://www.renault.fr/">Découvrez Renault</a></li>
            </ul>
        </div>
        <img src="img/hmi.png" alt="" class="menu-hg">
    </nav>
        <main>
EOT;
}

function template_footer(){
    echo <<<EOT
        <footer>
        <div id="contact">
            <p class="tel"  itemprop="telephone"><span>Télephone</span><a href="tel : 04 67 44 00 53"> : 04 67 44 00 53</a></p>
            <p class="adresse"><span>Adresse</span> : 356 Av. Général de Gaulle, 34700 Lodève</p>
            <p  class="droit"><a href="adminpage.html">Tous droits réservés</a></p> 
        </div>
        <div class="horaires">
            <ul>
                <li><span>Lundi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Mardi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Mercredi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Jeudi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Vendredi</span> : 8h-12H  |  14H-18h</li>
                <li><span>Samedi</span> : Fermé</li>
                <li><span>Dimanche</span> : Fermé</li>
            </ul>
        </div>
        </footer>
        <script src="./js/script.js"></script>
        </body>
    </html>
    
    EOT;
}