<?php

namespace MonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
    	$pers1 = array(
    		"nom" => "GAUCHER",
    		"prenom" => "Yoann"
    	);

    	$pers2 = array(
    		"nom" => "DUCLOS",
    		"prenom" => "Mathilde"
    	);

        return $this->render(
        	'MonBundle:Default:index.html.twig', 
        	array(
        		"personnes" => array($pers1, $pers2),
        		"nbPersonne" => 3
        	)
        );
    }

    /**
     * @Route("/ma_deuxieme_page", name="page2")
     */
    public function page2Action()
    {
    	// $listClients = $this->getDoctrine()->getRepository('MonBundle:Personne')->findBy(
    	// 	array(),
    	// 	array(
    	// 		'nom' => 'ASC',
    	// 		'prenom' => 'ASC'
    	// 	)
    	// );
        $date = new \DateTime('1990-01-01');
        //Récupère tous les clients dont la date de naissance est supérieur à 01/01/1990
        $listClients = $this->getDoctrine()->getRepository('MonBundle:Personne')->findByDateNaissance($date);

    	return $this->render('MonBundle:Default:page2.html.twig', array(
    		"personnes" => $listClients
    	));

    }

}
