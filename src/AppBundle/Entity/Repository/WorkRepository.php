<?php
// src/AppBundle/Entity/Repository/WorkRepository.php
namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class WorkRepository extends EntityRepository
{
    public function getClosestWorks($id)
    {
        $prev = $this
            ->createQueryBuilder('work')
            ->select('MAX(work.id)')
            ->where('work.id < :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;

        $next = $this
            ->createQueryBuilder('work')
            ->select('MIN(work.id)')
            ->where('work.id > :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;

        return [
            'prev' => $prev[1],
            'next' => $next[1]
        ];
    }
}
