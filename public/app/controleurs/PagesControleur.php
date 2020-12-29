<?php
/*
 * ./app/controleurs/defaultsControleur.php
 * Contrôleur des pages
 */

namespace App\Controleurs;
//use Modeles\Default;

class PagesControleur {

  public function indexAction() {
    //include_once '../app/modeles/defaultsModele.php';
    //$defaults = Default\findAll($connexion);
    
    GLOBAL $zoneContenu, $zoneTitre;
    ob_start();
        include '../app/vues/defaults/index.php';
    $zoneContenu = ob_get_clean();

  }
}
