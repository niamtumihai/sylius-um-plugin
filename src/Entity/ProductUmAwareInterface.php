<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Entity;

interface ProductUmAwareInterface
{
    /**
     * @return ProductUmInterface|null
     */
    public function getUm(): ?ProductUmInterface;

    /**
     * @param ProductUmInterface|null $um
     */
    public function setUm(?ProductUmInterface $um): void;
}
