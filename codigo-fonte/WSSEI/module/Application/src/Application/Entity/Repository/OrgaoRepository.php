<?php

namespace Application\Entity\Repository;

use Base\Entity\Repository\AbstractEntityRepository;
use Application;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * OrgaoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrgaoRepository extends AbstractEntityRepository
{
    public function listarOrgao ($limit, $offset) {
        $qb = $this->_em->createQueryBuilder();

        $qb->select('O')
            ->from('Application\Entity\Orgao', 'O')
            ->where('O.sinAtivo = :ativo')
            ->setParameter('ativo', 'S');

        $qb->setFirstResult($offset)
            ->setMaxResults($limit);

        $paginator = new Paginator($qb, true);

        return array('result' => $paginator->getQuery()->getResult(), 'count' => $paginator->count());
    }
}
