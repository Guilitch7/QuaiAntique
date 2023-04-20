<?php

namespace App\Form;

use App\Entity\Dishes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\File;

class DishesType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("DISHESname", TextType::class, [  "label" => "Nom",
                                                "required" => true,
                                                "constraints" => [
                                                new NotBlank(["message" => 'Ce champ ne peut être vide'])]
                                            ])
            ->add("DISHEScategory", ChoiceType::class, [   "label" => "Catégorie",
                                                        "required" => true,
                                                        "constraints" => [
                                                        new NotBlank(["message" => 'Ce champ ne peut être vide'])],
                                                        "choices"  => [
                                                            'Entrée' => 'entrée',
                                                            'Plat' => 'Plat',
                                                            'Dessert' => 'Dessert',
                                                            'Boisson' => 'Boisson',
                                                        ],
                                                        'placeholder' => ' ',
                                            ])
            ->add("DISHEStype", ChoiceType::class, [ "label" => "Sous-type",
                                                    "required" => false,
                                                    "choices"  => [ 
                                                        'Viande' => 'Viande',
                                                        'Poisson' => 'Poisson',
                                                        'Spécialité' => 'Spécialité',                                              
                                                        'Digestif' => 'Digestif',
                                                        'Apéritif' => 'Apéritifs',
                                                        'Bières bouteille' => 'Bières bouteille',
                                                        'Sans alcool' => 'Sans alcool',
                                                        'Vins au verre' => 'Vins au verre',
                                                    ]
                                                            ])
            ->add("DISHESprice", IntegerType::class, ["label" => "Prix", "required" => true])
            ->add("DISHESdescription", TextType::class, ["label" => "Description", "required" => true])
            ->add("DISHESphoto", FileType::class, ["label" =>"Image",
                                            "required" => false,
                                            'constraints' => [ new File ([
                                                                            'maxSize' => '2048k',
                                                                            'mimeTypes' => [
                                                                                'image/jpeg',
                                                                                'image/jpg',
                                                                                'image/svg+xml',
                                                                                'image/png',
                                                                                'image/bmp',
                                                                                'image/gif'],
                                                                            'mimeTypesMessage' => 'Veuillez proposer une image valide',
                                                                                ])]])
            ->add("DISHESmenusMontagnard", CheckboxType::class, ["label" => "inclus dans le menu Montagnard", "required" => false])
            ->add("DISHESmenusExpress", CheckboxType::class, ["label" => "inclus dans le menu Express", "required" => false]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Dishes::class,
        ]);
    }
}
