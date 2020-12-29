<?php

/**
 * ./noyau/classes/App.php 
 * Classe de l'application
 */

namespace Noyau\Classes;

abstract class App
{
  private static  $_connexion = null, $_root, $_start = false;

  //Getters
  public static function getConnexion()
  {
    return SELF::$_connexion;
  }

  public static function getRoot()
  {
    return SELF::$_root;
  }

  //Setters
  private static function setConnexion()
  {
    $dsn = "mysql:host=" . DBHOTE . ";dbname=" . DBNAME;
    $param = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    try {
      SELF::$_connexion = new \PDO($dsn, DBUSER, DBPWD, $param);
    } catch (\PDOException $e) {
      die("Problème de connexion à la base de données...");
    }
  }

  private static function setRoot()
  {
    $root = explode('index.php', $_SERVER['PHP_SELF']);
    define('ROOT', 'http://' . $_SERVER['HTTP_HOST'] . $root[0]);
  }

  //Autres Methodes
  public static function start()
  {   
    if (SELF::$_start):
    session_start();
    SELF::setRoot();
    SELF::setConnexion();
    SELF::$_start = true;
    endif;
  }

  public static function close()
  {   
    SELF::$_connexion = null;
  }
}
