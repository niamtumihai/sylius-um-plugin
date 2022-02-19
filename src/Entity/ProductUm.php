<?php

namespace Blackowl\SyliusUmPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blackowl\SyliusUmPlugin\Entity\ProductUm
 *
 * @ORM\Table(name="blackowl_products_um")
 * @ORM\Entity
 * @ORM\MappedSuperclass
 */
class ProductUm implements ProductUmInterface {

    use ProductsAwareTrait {
        ProductsAwareTrait::__construct as private __productsAwareTraitConstruct;
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     * 
     * @ORM\Column(name="name", type="string", length=50, unique=true, nullable=false)
     */
    private $name;
   
    /**
     * @var string $code
     * 
     * @ORM\Column(name="code", type="string", length=50, unique=true, nullable=false)
     */
    private $code;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ProductUm
     */
    public function setName(?string $name): void {
        $this->name = $name;
    }

    /**
     * Get umName
     *
     * @return string 
     */
    public function getName(): ?string {
        return $this->name;
    }

     public function __toString(): string {
        return $this->name;
    }

    public function __construct() {
        $this->__productsAwareTraitConstruct();
    }

    public function addProduct(ProductInterface $product): void {
        if (!$this->hasProduct($product)) {
            $product->setUm($this);
            $this->products->add($product);
        }
    }

    public function getCode(): ?string {
        return $this->code;
    }

    public function removeProduct(ProductInterface $product): void {
        if ($this->hasProduct($product)) {
            $product->setUm(null);
            $this->products->removeElement($product);
        }
    }

    public function setCode(?string $code): void {
        $this->code = $code;
    }

    /**
     * @ORM\OneToMany(targetEntity="Sylius\Component\Product\Model\ProductInterface", mappedBy="pjUm")
     */
    private $products2;

    /**
     * @return mixed
     */
    public function getProducts2():array
    {
        return $this->products2;
    }

    /**
     * @param mixed $products2
     */
    public function setProducts2($products2): void
    {
        $this->products2 = $products2;
    }
    
}