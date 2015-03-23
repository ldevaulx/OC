<?php


namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CoreController extends Controller
{
  public function indexAction()
  {
     // Notre liste d'annonce en dur
    $listAdverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony2',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Offre de stage webdesigner',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime())
      );

    // Et modifiez le 2nd argument pour injecter notre liste
    return $this->render('OCCoreBundle:Core:index.html.twig', array(
      'listAdverts' => $listAdverts
      ));  
  }

public function contactAction(Request $request)
  {
    $session = $request->getSession();
    
    $session->getFlashBag()->add('info', 'La page contact n\'existe pas encore...');

 
    // Puis on redirige vers la page de visualisation de cette annonce
    return $this->redirect($this->generateUrl('oc_core_index'));
  }}
