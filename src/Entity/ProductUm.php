<?php

namespace Blackowl\SyliusUmPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blackowl\SyliusUmPlugin\Entity\ProductUm
 *
 * @ORM\Table(name="blackowl_products_um")
 * @ORM\Entity
 */
class ProductUm
{
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return ProductUm
     */
    public function setName($umName)
    {
        $this->name = $umName;
    
        return $this;
    }

    /**
     * Get umName
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    public function __toString() 
    {
        return $this->name;
    }
}