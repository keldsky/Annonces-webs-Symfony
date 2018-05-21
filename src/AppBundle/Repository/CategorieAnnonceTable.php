<?php

/**
 * Created by PhpStorm.
 * User: gaby
 * Date: 07/02/2018
 * Time: 01:33
 */
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\CategorieAnnonce;

class CategorieAnnonceTable extends EntityRepository
{
    public function findAllCategorie()
    {
        $repository = $this->getEntityManager();

        $categorie = $repository->getRepository('AppBundle:CategorieAnnonce')->findAll();

        return $categorie;
    }



}