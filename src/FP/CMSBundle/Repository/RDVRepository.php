<?php

namespace FP\CMSBundle\Repository;

/**
 * RDVRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RDVRepository extends \Doctrine\ORM\EntityRepository
{
    public function nbRdv() {
//        return DB::table('orders')->where('id', DB::raw("(select max(`id`) from orders)"))->get();
        $nbrdv = $this->_em->createQueryBuilder()
            ->select('Count(r.id)')
            ->from('FPCMSBundle:RDV', 'r')
            ->getQuery()
            ->getSingleScalarResult();
        ;

        return $nbrdv;
    }

    public function nbRdvByMedecin($medecin_id) {
//        return DB::table('orders')->where('id', DB::raw("(select max(`id`) from orders)"))->get();
        $nbrdvbymedecin = $this->_em->createQueryBuilder()
            ->select('Count(r.id)')
            ->from('FPCMSBundle:RDV', 'r')
            ->leftJoin('r.utilisateur', 'u')
            ->where('u.id = :medecin_id')
            ->setParameter('medecin_id', $medecin_id)
            ->getQuery()
            ->getSingleScalarResult();
        ;

        return $nbrdvbymedecin;
    }
}
