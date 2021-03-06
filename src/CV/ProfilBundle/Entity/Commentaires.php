<?php

namespace CV\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity(repositoryClass="CV\ProfilBundle\Repository\CommentairesRepository")
 */
class Commentaires
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_crea", type="datetime")
     */
    private $dateCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="champ", type="text")
     */
    private $champ;

    /**
     * @var boolean
     *
     * @ORM\Column(name="from_modif", type="boolean")
     */
    private $from_modif = false;


    /**
   * @ORM\ManyToOne(targetEntity="CV\ProfilBundle\Entity\Profil", cascade={"persist"},inversedBy="commentaires")
   */
  private $profil;

    /**
   * @ORM\ManyToOne(targetEntity="CV\ProfilBundle\Entity\Client", cascade={"persist"},inversedBy="commentaires")
   */
  private $client;

 /**
   * @ORM\ManyToOne(targetEntity="CV\UserBundle\Entity\RI", cascade={"persist"})
   */
  private $ri;
  
  public function __construct()
  {
    $this->dateCrea = new \Datetime();
  }

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
     * Set dateCrea
     *
     * @param \DateTime $dateCrea
     *
     * @return Commentaires
     */
    public function setDateCrea($dateCrea)
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }

    /**
     * Get dateCrea
     *
     * @return \DateTime
     */
    public function getDateCrea()
    {
        return $this->dateCrea;
    }

    /**
     * Set champ
     *
     * @param string $champ
     *
     * @return Commentaires
     */
    public function setChamp($champ)
    {
        $this->champ = $champ;

        return $this;
    }

    /**
     * Get champ
     *
     * @return string
     */
    public function getChamp()
    {
        return $this->champ;
    }

    /**
     * Set profil
     *
     * @param \CV\ProfilBundle\Entity\Profil $profil
     *
     * @return Commentaires
     */
    public function setProfil(\CV\ProfilBundle\Entity\Profil $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return \CV\ProfilBundle\Entity\Profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set ri
     *
     * @param \CV\UserBundle\Entity\RI $ri
     *
     * @return Commentaires
     */
    public function setRi(\CV\UserBundle\Entity\RI $ri = null)
    {
        $this->ri = $ri;

        return $this;
    }

    /**
     * Get ri
     *
     * @return \CV\UserBundle\Entity\RI
     */
    public function getRi()
    {
        return $this->ri;
    }

    /**
     * Set fromModif
     *
     * @param boolean $fromModif
     *
     * @return Commentaires
     */
    public function setFromModif($fromModif)
    {
        $this->from_modif = $fromModif;

        return $this;
    }

    /**
     * Get fromModif
     *
     * @return boolean
     */
    public function getFromModif()
    {
        return $this->from_modif;
    }

    /**
     * Set client
     *
     * @param \CV\ProfilBundle\Entity\Client $client
     *
     * @return Commentaires
     */
    public function setClient(\CV\ProfilBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \CV\ProfilBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
