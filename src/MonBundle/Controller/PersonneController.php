<?php

namespace MonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MonBundle\Entity\Personne;
use MonBundle\Entity\Client;

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
        $cli = new Client();
        //Hydrater l'objet personne pour avoir le formulaire pré-rempli
        //$pers->setNom("GAUCHARD");

        $formCli = $this->createForm('MonBundle\Form\ClientType', $cli);
        // Attention : Lorsque le formulaire est envoyé, la même action qu'il l'a affiché est à nouveau appelée.

        //Prise en compte de la requête POST à la soumission du formulaire
        $formCli->handleRequest($request);

        //On vérifie que le formulaire a bien été envoyé et validé
        if($formCli->isSubmitted() && $formCli->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Récupère l'objet à partir duquel on a créé notre formulaire, hydraté avec les valeurs transmises en méthode POST dans notre request
            $cli = $formCli->getData();
            $pers = $cli->getPersonne();
            $em->persist($pers);
            $em->persist($cli);
            $em->flush();
            $message = "Votre client a bien été enregistré.";
        } else {
            $message = null;
        }

        return $this->render('MonBundle:Personne:create.html.twig', array(
            'message' => $message,
            'formCli' => $formCli->createView()
        ));
    }

}
