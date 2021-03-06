<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materialeintragliste
 *
 * @ORM\Table(name="materialeintragliste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MaterialeintraglisteRepository")
 */
class Materialeintragliste
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
     * @ORM\OneToMany(targetEntity="Materialeintrag", mappedBy="materialeintragliste")
     */
    private $materialeintrag;
    

    /**
     * @var int
     *
     * @ORM\Column(name="anzahl", type="integer")
     */
    private $anzahl;

    /**
     * @var int
     *
     * @ORM\Column(name="betragProAnzahl", type="integer")
     */
    private $betragProAnzahl;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;
    
    /**
     * @var int
     *
     * @ORM\Column(name="arbeitsrapportId", type="integer", nullable=true)
     */
    private $arbeitsrapportId;
    


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
     * Set anzahl
     *
     * @param integer $anzahl
     *
     * @return Materialeintragliste
     */
    public function setAnzahl($anzahl)
    {
        $this->anzahl = $anzahl;

        return $this;
    }

    /**
     * Get anzahl
     *
     * @return int
     */
    public function getAnzahl()
    {
        return $this->anzahl;
    }

    /**
     * Set betragProAnzahl
     *
     * @param integer $betragProAnzahl
     *
     * @return Materialeintragliste
     */
    public function setBetragProAnzahl($betragProAnzahl)
    {
        $this->betragProAnzahl = $betragProAnzahl;

        return $this;
    }

    /**
     * Get betragProAnzahl
     *
     * @return int
     */
    public function getBetragProAnzahl()
    {
        return $this->betragProAnzahl;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Materialeintragliste
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materialeintrag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add materialeintrag
     *
     * @param \AppBundle\Entity\Materialeintrag $materialeintrag
     *
     * @return Materialeintragliste
     */
    public function addMaterialeintrag(\AppBundle\Entity\Materialeintrag $materialeintrag)
    {
        $this->materialeintrag[] = $materialeintrag;

        return $this;
    }

    /**
     * Remove materialeintrag
     *
     * @param \AppBundle\Entity\Materialeintrag $materialeintrag
     */
    public function removeMaterialeintrag(\AppBundle\Entity\Materialeintrag $materialeintrag)
    {
        $this->materialeintrag->removeElement($materialeintrag);
    }

    /**
     * Get materialeintrag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMaterialeintrag()
    {
        return $this->materialeintrag;
    }

    /**
     * Set arbeitsrapportId
     *
     * @param integer $arbeitsrapportId
     *
     * @return Materialeintragliste
     */
    public function setArbeitsrapportId($arbeitsrapportId)
    {
        $this->arbeitsrapportId = $arbeitsrapportId;

        return $this;
    }

    /**
     * Get arbeitsrapportId
     *
     * @return integer
     */
    public function getArbeitsrapportId()
    {
        return $this->arbeitsrapportId;
    }
}
