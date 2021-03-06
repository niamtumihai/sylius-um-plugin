<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class BlackowlSyliusUmPlugin extends Bundle
{
    use SyliusPluginTrait;
     
    /**
     * {@inheritdoc}
     */
    public function getSupportedDrivers(): array
    {
        return [
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM,
        ];
    }
}
