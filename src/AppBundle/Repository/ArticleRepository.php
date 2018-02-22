<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Expr;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByPage($page, $nbParPage)
    {

        $query = $this->getEntityManager()->createQuery("SELECT A FROM AppBundle:Article A")
            ->setFirstResult($page)
            ->setMaxResults($nbParPage)
        ;
        $query->execute();

        return $query->getResult();
    }
}