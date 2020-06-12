<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Doctrine\ORM;

use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use Sylius\Component\Core\Repository\ProductRepositoryInterface as BaseProductRepositoryInterface;

interface ProductRepositoryInterface extends BaseProductRepositoryInterface
{
    /**
     * @param ProductUmInterface $um
     *
     * @return iterable
     */
    public function createPaginatorForProductUm(ProductUmInterface $um): iterable;
}
