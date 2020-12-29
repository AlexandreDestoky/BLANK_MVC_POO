<?php

/*
 * ./app/modeles/PagesGestionnaire.php
 * Gestionnaire des pages
 */

namespace App\Modeles;

class PagesGestionnaire
{
  public function findOneById(int $id = 1)
  {
    //SQL FETCH_ASSOC
    // [
    //   "id"=> 1,
    //   "titre"=> "Editorial",
    //   "texte"=> "Lorem Ipsum000"
    // ]
    $page =  [
      "id" => 1,
      "titre" => "Editorial",
      "texte" => "Lorem Ipsum000"
    ];
    return new Page($page);
  }
}
