<?php

/*
 * ./app/modeles/defaultsModele.php
 * Modèle default
 */

namespace App\Modeles;

class PagesGestionnaire {
  public function findOneById (int $id = 1) {
    //SQL
    return "Coucou Gestionnaire";
  }
}
