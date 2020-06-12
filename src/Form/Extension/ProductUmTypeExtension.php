<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Form\Extension;

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
        $builder->add('um', SupplierAutocompleteChoiceType::class, [
            'placeholder' => 'blackowl_sylius_um.form.product.select_um',
            'label' => 'blackowl_sylius_um.form.product.um',
            'required' => true,
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
