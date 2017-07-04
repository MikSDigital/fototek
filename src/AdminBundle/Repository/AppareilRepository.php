<?php

namespace AdminBundle\Repository;

/**
 * AppareilRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AppareilRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllByAutor ($autorObject)
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.auteur = :auteur')
            ->setParameter('auteur', $autorObject);

        return $qb;
    }
}
