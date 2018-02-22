<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturePaiement
 *
 * @ORM\Table(name="facture_paiement", indexes={@ORM\Index(name="fk_facture_paiement_paiement1_idx", columns={"mode_paiement_id"}), @ORM\Index(name="fk_facture_paiement_facture1", columns={"facture_id"})})
 * @ORM\Entity
 */
class FacturePaiement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facture_id", referencedColumnName="id")
     * })
     */
    private $facture;

    /**
     * @var \ModePaiement
     *
     * @ORM\ManyToOne(targetEntity="ModePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mode_paiement_id", referencedColumnName="id")
     * })
     */
    private $modePaiement;



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
     * Set montant
     *
     * @param float $montant
     *
     * @return FacturePaiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set facture
     *
     * @param \AppBundle\Entity\Facture $facture
     *
     * @return FacturePaiement
     */
    public function setFacture(\AppBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \AppBundle\Entity\Facture
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set modePaiement
     *
     * @param \AppBundle\Entity\ModePaiement $modePaiement
     *
     * @return FacturePaiement
     */
    public function setModePaiement(\AppBundle\Entity\ModePaiement $modePaiement = null)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return \AppBundle\Entity\ModePaiement
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getFacture()->getNumero().' '.$this->getModePaiement();
    }
}
