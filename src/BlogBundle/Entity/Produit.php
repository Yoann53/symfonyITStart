<?php

namespace BlogBundle\Entity;

/**
 * Produit
 */
class Produit
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
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $prixUnitaire;

    /**
     * @var integer
     */
    private $quantiteStock;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $com;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->com = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Produit
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prixUnitaire
     *
     * @param integer $prixUnitaire
     *
     * @return Produit
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return integer
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set quantiteStock
     *
     * @param integer $quantiteStock
     *
     * @return Produit
     */
    public function setQuantiteStock($quantiteStock)
    {
        $this->quantiteStock = $quantiteStock;

        return $this;
    }

    /**
     * Get quantiteStock
     *
     * @return integer
     */
    public function getQuantiteStock()
    {
        return $this->quantiteStock;
    }

    /**
     * Add com
     *
     * @param \BlogBundle\Entity\Commande $com
     *
     * @return Produit
     */
    public function addCom(\BlogBundle\Entity\Commande $com)
    {
        $this->com[] = $com;

        return $this;
    }

    /**
     * Remove com
     *
     * @param \BlogBundle\Entity\Commande $com
     */
    public function removeCom(\BlogBundle\Entity\Commande $com)
    {
        $this->com->removeElement($com);
    }

    /**
     * Get com
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCom()
    {
        return $this->com;
    }
}

