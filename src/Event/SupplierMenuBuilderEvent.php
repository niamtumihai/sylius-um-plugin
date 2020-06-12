<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Event;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class ProductUmMenuBuilderEvent extends MenuBuilderEvent
{
    /** @var ProductUmInterface */
    private $um;

    public function __construct(FactoryInterface $factory, ItemInterface $menu, ProductUmInterface $um)
    {
        parent::__construct($factory, $menu);

        $this->um = $um;
    }

    public function getUm(): ProductUmInterface
    {
        return $this->um;
    }
}
