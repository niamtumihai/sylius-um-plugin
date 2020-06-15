<?php

declare(strict_types=1);

namespace Blackowl\SyliusUmPlugin\Form\Extension;

use Blackowl\SyliusUmPlugin\Form\Type\ProductUmAutocompleteChoiceType;
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
        $builder->add('um', ProductUmAutocompleteChoiceType::class, [
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
