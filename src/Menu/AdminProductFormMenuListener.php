<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Menu;

use Sylius\Bundle\AdminBundle\Event\ProductMenuBuilderEvent;

final class AdminProductFormMenuListener
{
    /**
     * @param ProductMenuBuilderEvent $event
     */
    public function addItems(ProductMenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

//        $menu
//            ->addChild('um')
//            ->setAttribute('template', '@BlackowlSyliusUmPlugin/Admin/Product/_um.html.twig')
//            ->setLabel('blackowl_sylius_um.ui.um')
//        ;
    }
}
