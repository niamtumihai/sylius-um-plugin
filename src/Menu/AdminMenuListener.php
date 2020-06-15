<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $catalog = $menu->getChild('catalog');

        if ($catalog) {
            $this->addChild($catalog);
        } else {
            $this->addChild($menu->getFirstChild());
        }
    }

    private function addChild(ItemInterface $item): void
    {
        $item
            ->addChild('um', [
                'route' => 'blackowl_sylius_um_admin_um_index',
            ])
            ->setLabel('blackowl_sylius_um.ui.um')
            ->setLabelAttribute('icon', 'balance scale');
    }
}
