<?php

<?php
class Personnage
{
  private $_id,
          $_degats,
          $_nom;

  const CEST_MOI = 1;
  const PERSONNAGE_TUE = 2;
  const PERSONNAGE_FRAPPE = 3;

  public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }

  public function getId() { return $this->_id; }
  public function getNom() { return $this->_nom; }
  public function getDegats() { return $this->_degats; }

  public function setId($id)
  {
    // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
    $this->_id = (int) $id;
  }
        
  public function setNom($nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($nom) && strlen($nom) <= 30)
    {
      $this->_nom = $nom;
    }
  }

  public function setDegats($degats)
  {
     $this->_degats = (int) $degats;
  }


 // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }


  public function recevoirDegats($degats)
  {
    $newdegats = $this->getDegats();
    $newdegats += $degats;
    $this->setDegats($newdegats);
    if ($this->getDegats() >= 100)
      return self::PERSONNAGE_TUE;
    else
      return self::PERSONNAGE_FRAPPE;
  }

  public function frapper(Personnage $advers)
  {
    if ($this->getId() == $advers->getId())
      return self::CEST_MOI;
    else
    {
     return $advers->recevoirDegats(5);
    }
  }
}

