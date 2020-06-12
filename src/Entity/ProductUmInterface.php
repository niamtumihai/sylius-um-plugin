<?php
declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Entity;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;


interface ProductUmInterface extends ResourceInterface, CodeAwareInterface, ProductsAwareInterface{
    /**
     * Returns the name of the supplier
     *
     * @return string
     */
    public function __toString(): string;
    /**
     * @return int
     */
    public function getId(): ?int;

    /**
     * @return string|null
     */
    public function getName(): ?string;
    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;
    
}
