<?php

declare(strict_types=1);

namespace BlackOwl\SyliusUmPlugin\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use BlackOwl\SyliusUmPlugin\Event\ProductUmMenuBuilderEvent;
use BlackOwl\SyliusUmPlugin\Model\ProductUmInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface as ContractsEventDispatcherInterface;

final class ProductUmFormMenuBuilder
{
    public const EVENT_NAME = 'blackowl_sylius_productUm.menu.admin.um.form';

    /** @var FactoryInterface */
    private $factory;

    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    public function __construct(FactoryInterface $factory, EventDispatcherInterface $eventDispatcher)
    {
        $this->factory = $factory;

        if (class_exists('Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy')) {
            /**
             * It could return null only if we pass null, but we pass not null in any case
             *
             * @var ContractsEventDispatcherInterface
             */
            $eventDispatcher = LegacyEventDispatcherProxy::decorate($eventDispatcher);
        }

        $this->eventDispatcher = $eventDispatcher;
    }

    public function createMenu(array $options = []): ItemInterface
    {
        $menu = $this->factory->createItem('root');

        if (!array_key_exists('um', $options) || !$options['um'] instanceof ProductUmInterface) {
            return $menu;
        }

        $menu
            ->addChild('details')
            ->setAttribute('template', '@BlackOwlSyliusSupplierPlugin/Admin/Um/Tab/_details.html.twig')
            ->setLabel('sylius.ui.details')
            ->setCurrent(true)
        ;

        if (class_exists('Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy')) {
            $this->eventDispatcher->dispatch(
                new ProductUmMenuBuilderEvent($this->factory, $menu, $options['um']),
                self::EVENT_NAME
            );
        } else {
            $this->eventDispatcher->dispatch(
                self::EVENT_NAME,
                new ProductUmMenuBuilderEvent($this->factory, $menu, $options['um'])
            );
        }

        return $menu;
    }
}
