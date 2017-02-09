<?php

namespace BlogBundle\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $bic;

    /**
     * @var \BlogBundle\Entity\Personne
     */
    private $id;


    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return Client
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set bic
     *
     * @param string $bic
     *
     * @return Client
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Get bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set id
     *
     * @param \BlogBundle\Entity\Personne $id
     *
     * @return Client
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

