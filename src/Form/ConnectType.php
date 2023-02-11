<?php

namespace App\Form;

use App\Entity\Clients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ConnectType extends AbstractType 
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
                                                        ]);
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