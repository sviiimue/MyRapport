<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stundeneintragliste
 *
 * @ORM\Table(name="stundeneintragliste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StundeneintraglisteRepository")
 */
class Stundeneintragliste
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
     * @ORM\OneToMany(targetEntity="Stundeneintrag", mappedBy="stundeneintragliste")
     */
    private $stundeneintrag;
    
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime")
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="leistung", type="string", length=255)
     */
    private $leistung;

    /**
     * @var string
     *
     * @ORM\Column(name="std", type="string", length=255)
     */
    private $std;

    /**
     * @var int
     *
     * @ORM\Column(name="betragProStd", type="integer")
     */
    private $betragProStd;

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
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Stundeneintragliste
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set leistung
     *
     * @param string $leistung
     *
     * @return Stundeneintragliste
     */
    public function setLeistung($leistung)
    {
        $this->leistung = $leistung;

        return $this;
    }

    /**
     * Get leistung
     *
     * @return string
     */
    public function getLeistung()
    {
        return $this->leistung;
    }

    /**
     * Set std
     *
     * @param string $std
     *
     * @return Stundeneintragliste
     */
    public function setStd($std)
    {
        $this->std = $std;

        return $this;
    }

    /**
     * Get std
     *
     * @return string
     */
    public function getStd()
    {
        return $this->std;
    }

    /**
     * Set betragProStd
     *
     * @param integer $betragProStd
     *
     * @return Stundeneintragliste
     */
    public function setBetragProStd($betragProStd)
    {
        $this->betragProStd = $betragProStd;

        return $this;
    }

    /**
     * Get betragProStd
     *
     * @return int
     */
    public function getBetragProStd()
    {
        return $this->betragProStd;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Stundeneintragliste
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
        $this->stundeneintrag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add stundeneintrag
     *
     * @param \AppBundle\Entity\Stundeneintrag $stundeneintrag
     *
     * @return Stundeneintragliste
     */
    public function addStundeneintrag(\AppBundle\Entity\Stundeneintrag $stundeneintrag)
    {
        $this->stundeneintrag[] = $stundeneintrag;

        return $this;
    }

    /**
     * Remove stundeneintrag
     *
     * @param \AppBundle\Entity\Stundeneintrag $stundeneintrag
     */
    public function removeStundeneintrag(\AppBundle\Entity\Stundeneintrag $stundeneintrag)
    {
        $this->stundeneintrag->removeElement($stundeneintrag);
    }

    /**
     * Get stundeneintrag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStundeneintrag()
    {
        return $this->stundeneintrag;
    }

    /**
     * Set arbeitsrapportId
     *
     * @param integer $arbeitsrapportId
     *
     * @return Stundeneintragliste
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
