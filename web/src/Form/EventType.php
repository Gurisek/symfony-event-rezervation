<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Název',
                'attr'  => [
                    'placeholder' => 'Název akce'
                ]
            ])
            ->add('place', TextType::class, [
                'label' => 'Umístění',
                'attr'  => [
                    'placeholder' => 'Místo konání akce',
                ]
            ])
            ->add('date', DateTimeType::class, [
                'label' => 'Datum / čas',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Popisek',
                'attr'  => [
                    'placeholder' => 'Popis eventu..',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
