<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Doctrine\ORM;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

class ProductUmRepository extends EntityRepository implements ProductUmRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function findByPhrase(string $phrase): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.name LIKE :phrase OR o.code LIKE :phrase')
            ->setParameter('phrase', '%' . $phrase . '%')
            ->getQuery()
            ->getResult()
            ;
    }
}
