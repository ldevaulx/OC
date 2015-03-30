<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;

class LoadAdvert implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Création de l'entité Advert
    $advert = new Advert();
    $advert->setTitle('Un');
    $advert->setAuthor('Alexandre');
    $advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");
    $advert->setUpdatedAt(new \DateTime('2015-03-01'));
    $manager->persist($advert);

    $advert = new Advert();
    $advert->setTitle('Deux');
    $advert->setAuthor('Lolo');
    $advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");
    $advert->setUpdatedAt(new \DateTime('2015-01-01'));
    $manager->persist($advert);

    $advert = new Advert();
    $advert->setTitle('Trois');
    $advert->setAuthor('Lolo');
    $advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");
    $manager->persist($advert);

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}