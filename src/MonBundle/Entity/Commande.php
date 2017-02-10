<?php

namespace MonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="MonBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\Column(name="ref", type="string", length=50)
     */
    private $ref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expedition", type="datetime", nullable=true)
     */
    private $dateExpedition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cmd", type="datetime")
     */
    private $dateCmd;

    /**
     * Many Commandes have One Client.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="commandes")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

    /**
     * Many Commandes have One Statut.
     * @ORM\ManyToOne(targetEntity="Statut", inversedBy="commandes")
     * @ORM\JoinColumn(name="statut_id", referencedColumnName="id")
     */
    private $statut;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="commandes")
     */
    private $produits;

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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
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
     * @param \MonBundle\Entity\Client $client
     *
     * @return Commande
     */
    public function setClient(\MonBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \MonBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set statut
     *
     * @param \MonBundle\Entity\Statut $statut
     *
     * @return Commande
     */
    public function setStatut(\MonBundle\Entity\Statut $statut = null)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \MonBundle\Entity\Statut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Add produit
     *
     * @param \MonBundle\Entity\Produit $produit
     *
     * @return Commande
     */
    public function addProduit(\MonBundle\Entity\Produit $produit)
    {
        $this->produits[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \MonBundle\Entity\Produit $produit
     */
    public function removeProduit(\MonBundle\Entity\Produit $produit)
    {
        $this->produits->removeElement($produit);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }
}
