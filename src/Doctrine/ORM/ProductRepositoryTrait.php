<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Doctrine\ORM;

use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use Doctrine\ORM\QueryBuilder;

trait ProductRepositoryTrait
{
    /**
     * @param string $alias
     * @param string|null $indexBy The index for the from.
     *
     * @return QueryBuilder
     */
    abstract public function createQueryBuilder($alias, $indexBy = null);

    /**
     * {@inheritdoc}
     */
    public function createPaginatorForUm(ProductUmInterface $um): iterable
    {
        return $this->createQueryBuilder('o')
            ->where('o.um = :um')
            ->setParameter('um', $um)
            ->getQuery()
            ->getResult()
            ;
    }
}
