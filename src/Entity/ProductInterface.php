<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Entity;

use Sylius\Component\Core\Model\ProductInterface as BaseProductInterface;

interface ProductInterface extends BaseProductInterface, ProductUmAwareInterface
{
}
