<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Doctrine\ORM;

use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface ProductUmRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $phrase
     *
     * @return array|ProductUmInterface[]
     */
    public function findByPhrase(string $phrase): array;
}
