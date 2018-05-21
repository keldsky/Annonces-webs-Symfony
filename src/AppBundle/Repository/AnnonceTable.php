<?php

/**
 * Created by PhpStorm.
 * User: gaby
 * Date: 07/02/2018
 * Time: 01:32
 */
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\Annonce;

class AnnonceTable extends EntityRepository
{

    public function findAll_Annonce()
    {
        $repository = $this->getEntityManager();

        $annonc = $repository->getRepository('AppBundle:Annonce')->findAll();

        return $annonc;
    }

}