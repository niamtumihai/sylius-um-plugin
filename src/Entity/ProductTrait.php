<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;
use Blackowl\SyliusUmPlugin\Entity\ProductUmInterface;

trait ProductTrait
{
    /**
     * @var ProductUmInterface
     *
     * @ORM\ManyToOne(targetEntity="Blackowl\SyliusUmPlugin\Entity\ProductUm", cascade={"persist"}, fetch="EAGER", inversedBy="products")
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
     * @param ProductUmInterface|null $um
     */
    public function setUm(?ProductUmInterface $um): void
    {
        $this->um = $um;
    }
}
