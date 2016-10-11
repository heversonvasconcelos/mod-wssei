<?php

namespace Application\Entity\Repository;

use Base\Entity\Repository\AbstractEntityRepository;
use Application;
use Application\Entity\Protocolo;
use Doctrine\Common\Util\Debug;

/**
 * AnotacaoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AtributoAndamentoRepository extends AbstractEntityRepository
{
    public function pesquisarAtributoAndamento (Application\Entity\Atividade $atividade) {
        $qb = $this->createQueryBuilder('A');

        $qb->where('A.idAtividade = :atividade')
           ->setParameter('atividade', $atividade);

        return $qb->getQuery()->getResult();
    }

    public function pesquisarAtributoAndamentoPorProtocolo ($protocolo, $idTarefa) {
        $qb =  $this->_em->createQueryBuilder();

        $qb->select('A')
            ->from('Application\Entity\AtributoAndamento', 'A');

        $qb->join('A.idAtividade', 'AT')
            ->where('A.valor = :protocolo')
            ->setParameter('protocolo', $protocolo);

        $qb->andWhere('A.nome = :nome')
            ->setParameter('nome', 'DOCUMENTO');

        $qb->andWhere('AT.idTarefa = :tarefa')
            ->setParameter('tarefa', $idTarefa);

        return $qb->getQuery()->getResult();
    }

    public function maxAtributoAndamento() {
        $qb = $this->_em->createQueryBuilder();

        $qb->select('MAX(a.idAtributoAndamento) AS id')
            ->from('Application\Entity\AtributoAndamento', 'a');

        $result = $qb->getQuery()->getArrayResult();

        if (count($result))
            $id = $result[0]['id'];

        return $id;
    }
}
