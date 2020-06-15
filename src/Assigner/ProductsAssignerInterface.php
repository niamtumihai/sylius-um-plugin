<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Assigner;

use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use Blackowl\SyliusUmPlugin\Entity\ProductInterface;

interface ProductsAssignerInterface
{
    /**
     * @param ProductUmInterface $um
     * @param ProductInterface[]|array $products
     */
    public function assign(ProductUmInterface $um, array $products): void;
}
