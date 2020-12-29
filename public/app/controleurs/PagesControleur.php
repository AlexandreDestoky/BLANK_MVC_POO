<?php
/*
 * ./app/controleurs/defaultsControleur.php
 * Contrôleur des pages
 */

namespace App\Controleurs;

class PagesControleur {

  public function showAction() {
    //include_once '../app/modeles/pagesModele.php';
    //$defaults = Default\findOneById($connexion);
    $gestionnaire = new \App\Modeles\PagesGestionnaire();
    $page = $gestionnaire->findOneById(1);
    
    GLOBAL $zoneContenu, $zoneTitre;
    ob_start();
        include '../app/vues/pages/index.php';
    $zoneContenu = ob_get_clean();

  }
}
