<?php

/**
 * Created by PhpStorm.
 * User: gaby
 * Date: 07/02/2018
 * Time: 01:33
 */
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\TypeAnnonce;

class TypeAnnonceTable extends EntityRepository
{

    public function findAllTypeAnnonce()
    {
        $repository = $this->getEntityManager();

        $type = $repository->getRepository('AppBundle:TypeAnnonce')->findAll();

        return $type;
    }

}