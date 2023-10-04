<?php

namespace App\Form;

use App\Entity\Dishes;
use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
                                                            'Entrée' => 'Entrée',
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
            ->add("menu", EntityType::class, [      "class" => Menu::class,
                                                    "label" => "Menu",
                                                    "required" => false,
                                                    "choice_label"  => 'name',
                                                    "multiple" => true
                                                            ])
            ->add("DISHESprice", IntegerType::class, ["label" => "Prix", "required" => true])
            ->add("DISHESdescription", TextType::class, ["label" => "Description", "required" => false])
            ->add("DISHESphoto", FileType::class, ["label" =>"Image",
                                            "required" => false,
                                            "mapped" => false,
                                            'attr' => ['id' => 'picDishe'],
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
                                                                                ])]]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Dishes::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'register_item',
        ]);
    }
}
