<?php

namespace MonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
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
    public function createAction(Request $request)
    {
    	$pers = new Personne();
        //Hydrater l'objet personne pour avoir le formulaire pré-rempli
        //$pers->setNom("GAUCHARD");
    	$form = $this->createForm('MonBundle\Form\PersonneType', $pers);

        // Attention : Lorsque le formulaire est envoyé, la même action qu'il l'a affiché est à nouveau appelée.

        //Prise en compte de la requête POST à la soumission du formulaire
        $form->handleRequest($request);

        //On vérifie que le formulaire a bien été envoyé et validé
        if($form->isSubmitted() && $form->isValid()) {
            $message = "Le formulaire a bien été envoyé et validé !!";
        } else {
            $message = null;
        }

        return $this->render('MonBundle:Personne:create.html.twig', array(
            'message' => $message,
            'form' => $form->createView()
        ));
    }

}
