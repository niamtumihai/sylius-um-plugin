<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\EventListener;

use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Sylius\Component\Resource\Exception\UnexpectedTypeException;

final class ProductUmDeletionListener
{
    /**
     * Prevent um deletion if it used in product
     *
     * @param ResourceControllerEvent $event
     */
    public function onProductUmPreDelete(ResourceControllerEvent $event): void
    {
        $um = $event->getSubject();

        if (!$um instanceof ProductUmInterface) {
            throw new UnexpectedTypeException(
                $um,
                ProductUmInterface::class
            );
        }

        if ($um->hasProducts()) {
            $event->stop('blackowl_sylius_um.um.delete_error');
        }
    }
}
