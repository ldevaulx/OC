<?php
// src/OC/PlatformBundle/AdvertPurger/OCAdvertPurger.php

namespace OC\PlatformBundle\AdvertPurger;

use Doctrine\ORM\EntityManager;

class OCAdvertPurger
{

  protected $em;

  public function __construct(EntityManager $em)
  {
      $this->em = $em;
  }


  public function purge($days)
  {
    return $this->em->getRepository('OCPlatformBundle:Advert')->purge($days);
  }

}
