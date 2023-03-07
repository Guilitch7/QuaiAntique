<?php

namespace App\Form;

use App\Entity\Clients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Context\ExecutionContext;
use Symfony\Component\Validator\Constraints\Callback;
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
            ->add("password", PasswordType::class, [    "label" => "Mot de passe",
                                                        "required" => true,
                                                        "constraints" => [
                                                            new Length(["min" => 8, "minMessage" => 'Ce champ doit comporter au minimum 8 caractères']),
                                                            new NotBlank(["message" => 'Ce champ ne peut être vide'])]
                                                    ])
            ->add("confirm", PasswordType::class,  [
                                                        "label" => "Confirmer le mot de passe",
                                                        "required" => true,
                                                        "constraints" => [
                                                            new NotBlank(["message" => "Le mot de passe ne peut pas être vide !"]),
                                                            // new EqualTo(["propertyPath" => "password", "message" => "Les mots de passe doivent être identique !"])
                                                            new Callback(['callback' => function ($value, ExecutionContext $ec) {
                                                                if ($ec->getRoot()['password']->getViewData() !== $value) {
                                                                    $ec->addViolation("Les mots de passe doivent être identiques !");
                                                                }
                                                            }])
                                                        ]
                                                    ])
            ->add("coversNumber", IntegerType::class, ["label" => "Convives", "required" => false])
            ->add("foodAllergies", ChoiceType::class, ["label" => "Allergies", "required" => false,
                                                        'choices'  => [
                                                            'Crustacés' => 'Crustacés',
                                                            'Viande' => 'Viande',
                                                            'Poisson' => 'Poisson',
                                                            'Gluten' => 'Gluten'
                                                        ],]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Clients::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'register_item',
        ]);
    }
}