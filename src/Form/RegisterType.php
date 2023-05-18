<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegisterType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("UserIdentifier", EmailType::class, [  "label" => "Email",
                                                 "required" => true,
                                                 "constraints" => [
                                                    new NotBlank(["message" => 'Ce champ ne peut être vide'])]
                                            ])
            ->add("password", RepeatedType::class, [
                                                        'type' => PasswordType::class,
                                                        'invalid_message' => 'Les mots de passe doivent correspondre',
                                                        'options' => ['attr' => ['class' => 'password-field']],
                                                        'required' => true,
                                                        'first_options'  => ['label' => 'Mot de passe'],
                                                        'second_options' => ['label' => 'Confirmation du mot de passe'],
                                                        "constraints" => [
                                                            new Length(["min" => 8, "minMessage" => 'Ce champ doit comporter au minimum 8 caractères']),
                                                            new NotBlank(["message" => 'Ce champ ne peut être vide'])]
                                                    ])
            ->add("coversNumber", IntegerType::class, ["label" => "Votre nombre de convives par défaut ?", "required" => false])
            ->add("foodAllergies", ChoiceType::class, ["label" => "Vos éventuelles allergies alimentaires ?", "required" => false,
                                                        'choices'  => [
                                                            'Crustacés' => 'Crustacés',
                                                            'Viande' => 'Viande',
                                                            'Poisson' => 'Poisson',
                                                            'Gluten' => 'Gluten',
                                                            'Lactose' => 'Lactose',
                                                            'Arachide' => 'Arachide'
                                                        ],]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => User::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'register_item',
        ]);
    }
}