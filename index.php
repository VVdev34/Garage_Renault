<?php
session_start();
// On inclue functions.php pour la conenction a la base de donnée
include 'fonctions.php';
$pdo = pdo_connect_mysql();

// Quand le visiteur arriver il arrive directement sur home.php
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
include $page . '.php';
?>