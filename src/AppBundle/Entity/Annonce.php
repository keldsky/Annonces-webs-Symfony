<?php
/**
 * Created by PhpStorm.
 * User: gaby
 * Date: 24/01/2018
 * Time: 16:32
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceTable")
 * @ORM\Table()
 */
class Annonce
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $titre;

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * @param mixed $codepostal
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getDateAnnonce()
    {
        return $this->date_annonce;
    }

    /**
     * @param mixed $date_annonce
     */
    public function setDateAnnonce($date_annonce)
    {
        $this->date_annonce = $date_annonce;
    }
    /**
     * @param mixed $thetype
     */
    public function setThetype($thetype)
    {
        $this->thetype = $thetype;
    }
    /**
     * @return mixed
     */
    public function getThetype()
    {
        return $this->thetype;
    }
    /**
     * @param mixed $thetype
     */
    public function setThecategorie($thecategorie)
    {
        $this->thecategorie = $thecategorie;
    }
    /**
     * @return mixed
     */
    public function getThecategorie()
    {
        return $this->thecategorie;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $texte;

    /**
     * @ORM\Column(type="decimal")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $codepostal;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse;

    /**
     * @ORM\Column(type="text")
     */
    private $date_annonce;

    /**
     * @ORM\ManyToOne(targetEntity="TypeAnnonce",inversedBy="annonces")
     */
    private $thetype;

    /**
     * @ORM\ManyToOne(targetEntity="CategorieAnnonce",inversedBy="annonces")
     */
    private $thecategorie;

}