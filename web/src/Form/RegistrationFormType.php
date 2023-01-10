<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'label' => 'Heslo',
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Prosím vložte heslo.',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Vaše heslo by mělo mít alespoň {{ limit }} charakterů.',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('name', TextType::class, [
                'label' => 'Jméno',
                'required' => true,
            ])
            ->add('secondName', TextType::class, [
                'label' => 'Příjmení',
                'required' => true,
            ])
            ->add('nickName', TextType::class, [
                'label' => 'Nickname',
                'required' => true,
            ])
            ->add('telNumber', TextType::class, [
                'label' => 'Telefoní číslo',
                'required' => false,
                'attr' => [
                    'pattern' => '\d*',
                ],
                'constraints' => [
                    new Length([
                        'max' => 9,
                        'maxMessage' => 'Telefoní číslo má jen 9 číslic. Předčíslí +420 nemusíte udávat.'
                    ])
                ]
            ])
            ->add('social', TextareaType::class, [
                'label' => 'Socialní účty',
                'required' => false,
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Musíte souhlasit s našimi podmínkami',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
