<?php

namespace Translation\Extractor\Tests\Resources\Php\Symfony;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PlaceholderFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('field_with_attr_placeholder', 'text', array(
                'label' => 'field.with.placeholder',
                'attr' => array('placeholder' => 'form.placeholder.text')
            ))
            ->add('field_without_label_with_attr_placeholder', 'text', array(
                'label' => false,
                'attr' => array('placeholder' => 'form.placeholder.text.but.no.label')
            ))
            ->add('field_array_placeholder', 'choice', array(
                'placeholder' => 'form.choice_placeholder'
            ))
            ->add('field_placeholder', 'datetime', array(
                'placeholder' => [
                    'year' => 'form.datetime_array_year_placeholder',
                    'month' => 'form.datetime_array_month_placeholder',
                    'year' => 'form.datetime_array_day_placeholder'
                ]
            ))
            ->add('field_with_attr_array_placeholder', 'datetime', array(
                'attr' => [
                    'placeholder' => [
                        'year' => 'form.datetime_attr_array_year_placeholder',
                        'month' => 'form.datetime_attr_array_month_placeholder',
                        'year' => 'form.datetime_attr_array_day_placeholder'
                    ]
                ]
            ))
        ;
    }
}
