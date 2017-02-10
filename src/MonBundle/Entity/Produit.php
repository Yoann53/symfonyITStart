<?php

namespace MonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="MonBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=50, unique=true)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_unitaire", type="float")
     */
    private $prixUnitaire;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_stock", type="integer")
     */
    private $quantiteStock;

    /**
     * One Client has Many Commandes.
     * @ORM\OneToMany(targetEntity="CommandeProduit", mappedBy="produit")
     */
    private $commandeProduits;

    /**
     * Get id
     *
     * @return int
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
     * @param float $prixUnitaire
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
     * @return float
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
     * @return int
     */
    public function getQuantiteStock()
    {
        return $this->quantiteStock;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commandeProduit
     *
     * @param \MonBundle\Entity\CommandeProduit $commandeProduit
     *
     * @return Produit
     */
    public function addCommandeProduit(\MonBundle\Entity\CommandeProduit $commandeProduit)
    {
        $this->commandeProduits[] = $commandeProduit;

        return $this;
    }

    /**
     * Remove commandeProduit
     *
     * @param \MonBundle\Entity\CommandeProduit $commandeProduit
     */
    public function removeCommandeProduit(\MonBundle\Entity\CommandeProduit $commandeProduit)
    {
        $this->commandeProduits->removeElement($commandeProduit);
    }

    /**
     * Get commandeProduits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandeProduits()
    {
        return $this->commandeProduits;
    }
}
