<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegisterType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("email", EmailType::class, [  "label" => "Email",
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
            ->add("confirmPassword", PasswordType::class, [ "label" => "Confirmation mot de passe",
                                                            "required" => true,
                                                            "constraints" => [
                                                                new Length(["min" => 8, "minMessage" => 'Ce champ doit comporter au minimum 8 caractères']),
                                                                new NotBlank(["message" => 'Ce champ ne peut être vide'])]
                                                            ])
            ->add("convives", IntegerType::class, ["label" => "Convives", "required" => false] )
            ->add("allergies", ChoiceType::class, ["label" => "Allergies", "required" => false]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Post::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'register_item',
        ]);
    }
}