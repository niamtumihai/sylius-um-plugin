<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Assigner;

use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use Blackowl\SyliusUmPlugin\Entity\ProductInterface;

final class ProductsAssigner implements ProductsAssignerInterface
{
    /**
     * {@inheritdoc}
     */
    public function assign(ProductUmInterface $um, array $products): void
    {
        foreach ($products as $product) {
            if (!$product instanceof ProductInterface) {
                throw new \RuntimeException(sprintf(
                    "Some product was not found to assign to supplier '%s'",
                    $um->getCode()
                ));
            }

            $um->addProduct($product);
        }
    }
}
