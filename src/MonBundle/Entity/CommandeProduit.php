<?php

namespace MonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeProduit
 *
 * @ORM\Table(name="commande_produit")
 * @ORM\Entity(repositoryClass="MonBundle\Repository\CommandeProduitRepository")
 */
class CommandeProduit
{
    /**
     * Many Commandes have One Client.
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Commande", inversedBy="commandeProduits")
     * @ORM\JoinColumn(name="cmd_id", referencedColumnName="id")
     */
    private $commande;

    /**
     * Many Commandes have One Client.
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Produit", inversedBy="commandeProduits")
     * @ORM\JoinColumn(name="prd_id", referencedColumnName="id")
     */
    private $produit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;


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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return CommandeProduit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set commande
     *
     * @param \MonBundle\Entity\Commande $commande
     *
     * @return CommandeProduit
     */
    public function setCommande(\MonBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \MonBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set produit
     *
     * @param \MonBundle\Entity\Produit $produit
     *
     * @return CommandeProduit
     */
    public function setProduit(\MonBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \MonBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
