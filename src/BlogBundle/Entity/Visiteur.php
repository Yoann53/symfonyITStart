<?php

namespace BlogBundle\Entity;

/**
 * Visiteur
 */
class Visiteur
{
    /**
     * @var integer
     */
    private $nbVisites;

    /**
     * @var \BlogBundle\Entity\Personne
     */
    private $id;


    /**
     * Set nbVisites
     *
     * @param integer $nbVisites
     *
     * @return Visiteur
     */
    public function setNbVisites($nbVisites)
    {
        $this->nbVisites = $nbVisites;

        return $this;
    }

    /**
     * Get nbVisites
     *
     * @return integer
     */
    public function getNbVisites()
    {
        return $this->nbVisites;
    }

    /**
     * Set id
     *
     * @param \BlogBundle\Entity\Personne $id
     *
     * @return Visiteur
     */
    public function setId(\BlogBundle\Entity\Personne $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \BlogBundle\Entity\Personne
     */
    public function getId()
    {
        return $this->id;
    }
}

