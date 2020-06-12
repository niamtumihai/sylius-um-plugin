<?php

declare(strict_types=1);

namespace BlackOwl\SyliusUmPlugin\Form\Extension;

use BlackOwl\SyliusSupplierPlugin\Form\Type\SupplierAutocompleteChoiceType;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ProductUmTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('supplier', SupplierAutocompleteChoiceType::class, [
            'placeholder' => 'blackowl_sylius_supplier.form.product.select_supplier',
            'label' => 'blackowl_sylius_supplier.form.product.supplier',
            'required' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes()
    {
        return [
            ProductType::class,
        ];
    }
}
