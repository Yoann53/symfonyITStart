<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
    	$data = array(
    		"nom" => "GAUCHER",
    		"prenom" => "Yoann"
    	);

        return $this->render('BlogBundle:Default:index.html.twig', $data);
    }
}
