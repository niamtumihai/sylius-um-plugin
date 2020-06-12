<?php

declare(strict_types=1);

namespace BlackOwl\SyliusSupplierPlugin\Assigner;

use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use BlackOwl\SyliusUmPlugin\Entity\ProductInterface;

interface ProductsAssignerInterface
{
    /**
     * @param ProductUmInterface $um
     * @param ProductInterface[]|array $products
     */
    public function assign(ProductUmInterface $supplier, array $products): void;
}
