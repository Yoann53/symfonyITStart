<?php

namespace BlogBundle\Entity;

/**
 * Commande
 */
class Commande
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var \DateTime
     */
    private $dateExpedition;

    /**
     * @var \DateTime
     */
    private $dateCmd;

    /**
     * @var \BlogBundle\Entity\Client
     */
    private $client;

    /**
     * @var \BlogBundle\Entity\Statut
     */
    private $statut;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prd;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prd = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Commande
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set dateExpedition
     *
     * @param \DateTime $dateExpedition
     *
     * @return Commande
     */
    public function setDateExpedition($dateExpedition)
    {
        $this->dateExpedition = $dateExpedition;

        return $this;
    }

    /**
     * Get dateExpedition
     *
     * @return \DateTime
     */
    public function getDateExpedition()
    {
        return $this->dateExpedition;
    }

    /**
     * Set dateCmd
     *
     * @param \DateTime $dateCmd
     *
     * @return Commande
     */
    public function setDateCmd($dateCmd)
    {
        $this->dateCmd = $dateCmd;

        return $this;
    }

    /**
     * Get dateCmd
     *
     * @return \DateTime
     */
    public function getDateCmd()
    {
        return $this->dateCmd;
    }

    /**
     * Set client
     *
     * @param \BlogBundle\Entity\Client $client
     *
     * @return Commande
     */
    public function setClient(\BlogBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \BlogBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set statut
     *
     * @param \BlogBundle\Entity\Statut $statut
     *
     * @return Commande
     */
    public function setStatut(\BlogBundle\Entity\Statut $statut = null)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \BlogBundle\Entity\Statut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Add prd
     *
     * @param \BlogBundle\Entity\Produit $prd
     *
     * @return Commande
     */
    public function addPrd(\BlogBundle\Entity\Produit $prd)
    {
        $this->prd[] = $prd;

        return $this;
    }

    /**
     * Remove prd
     *
     * @param \BlogBundle\Entity\Produit $prd
     */
    public function removePrd(\BlogBundle\Entity\Produit $prd)
    {
        $this->prd->removeElement($prd);
    }

    /**
     * Get prd
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrd()
    {
        return $this->prd;
    }
}

