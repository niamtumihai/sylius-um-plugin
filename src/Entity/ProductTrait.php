<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;

trait ProductTrait
{
    /**
     * @var ProductUmInterface
     *
     * @ORM\ManyToOne(targetEntity="\BlackOwl\SyliusUmPlugin\Entity\ProductUmInterface", cascade={"persist"}, fetch="EAGER", inversedBy="products")
     * @ORM\JoinColumn(name="um_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $um;

    /**
     * @return ProductUmInterface|null
     */
    public function getUm(): ?ProductUmInterface
    {
        return $this->um;
    }

    /**
     * @param ProductUmInterface|null $supplier
     */
    public function setUm(?ProductUmInterface $um): void
    {
        $this->um = $um;
    }
}
