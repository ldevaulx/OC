<?php
class Rien
{
  static private $_compteur=0;
  
  public function __construct()
  {
  	self::$_compteur += 1;
  }

 public function getCompteur()
  {
  	return self::$_compteur;
  }

}

