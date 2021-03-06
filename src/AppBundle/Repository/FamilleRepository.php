<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Famille;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Expr;

/**
 * FamilleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FamilleRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByPage($page, $nbParPage)
    {

        $query = $this->getEntityManager()->createQuery("SELECT f FROM AppBundle:Famille f")
            ->setFirstResult($page)
            ->setMaxResults($nbParPage)
        ;
        $query->execute();

        return $query->getResult();
    }
}
