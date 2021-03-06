<?php

/*
 * ./www/index.php
 * DISPATCHER CENTRAL
 */

// Chargement du fichier d'initialisation
// require_once '../noyau/init.php';
require_once "../app/config/parametres.php";
require_once "../vendor/autoload.php";

//Démarrage de l'application
\Noyau\Classes\App::start();

var_dump(\Noyau\Classes\App::getConnexion());
// App::getConnexion();


// Chargement du routeur
// Pour mettre du contenu dans les zones dynamiques
require_once '../app/routeur.php';

// Chargement du template général
// Pour afficher les zones dynamiques
/* AJAX check  */
if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
  && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
  // Traitement pour une requête NON AJAX
  require_once '../app/vues/templates/' . $template . 'defaut.php';
}
// \Noyau\Classes\App::getTemplate();

// Fermeture de l'application
// unset($connexion);
\Noyau\Classes\App::close();
