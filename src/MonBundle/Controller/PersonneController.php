<?php

namespace MonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MonBundle\Entity\Personne;

/**
 * Personne controller.
 *
 * @Route("/personne")
 */
class PersonneController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
    	$pers = new Personne();
    	$form = $this->createForm('MonBundle\Form\PersonneType', $pers);

        return $this->render('MonBundle:Personne:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
