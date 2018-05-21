<?php
/**
 * Created by PhpStorm.
 * User: gaby
 * Date: 24/01/2018
 * Time: 16:54
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeAnnonceTable")
 * @ORM\Table()
 */
class TypeAnnonce
{
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $intitule;


    /**
     * @ORM\OneToMany(targetEntity="Annonce",mappedBy="thetype")
     */
    private $annonces;

    public function __construct() {
    $annonces = new ArrayCollection();
    }
}