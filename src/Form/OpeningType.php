<?php

namespace App\Form;

use App\Entity\Openingdays;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class OpeningType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("OPENINGDAYSday", ChoiceType::class, [  
                    "label" => "Jour",
                    "required" => true,
                    'choices'  => [
                        'Lundi' => 'Lundi',
                        'Mardi' => 'Mardi',
                        'Mercredi' => 'Mercredi',
                        'Jeudi' => 'Jeudi',
                        'Vendredi' => 'Vendredi',
                        'Samedi' => 'Samedi',
                        'Dimanche' => 'Dimanche'],
            ])

            ->add('Openlunch', TimeType::class, [
                "label" => "Ouverture midi",
                'widget' => 'choice',
                'placeholder' => [
                    'hour' => 'Fermé', 'minute' => 'Fermé',
                ],
                'hours' => [ '11' => '11', '12' => '12'],
                'minutes' => [ '15' => '15','30' => '30', '45' => '45','00' => '00'],
                'required' => false
            ])
            
            ->add('Closelunch', TimeType::class, [
                "label" => "Fermeture midi",
                'widget' => 'choice',
                'placeholder' => [
                    'hour' => 'Fermé', 'minute' => 'Fermé',
                ],
                'hours' => [ '11' => '11', '12' => '12','13' => '13','14' => '14'],
                'minutes' => [ '15' => '15','30' => '30', '45' => '45','00' => '00'],
                'required' => false
            ])

            ->add('Opendinner', TimeType::class, [
                "label" => "Ouverture soir",
                'widget' => 'choice',
                'placeholder' => [
                    'hour' => 'Fermé', 'minute' => 'Fermé',
                ],
                'hours' => [ '18' => '18','19' => '19','20' => '20'],
                'minutes' => [ '15' => '15','30' => '30', '45' => '45','00' => '00'],
                'required' => false
            ])

            ->add('Closedinner', TimeType::class, [
                "label" => "Fermeture soir",
                'widget' => 'choice',
                'placeholder' => [
                    'hour' => 'Fermé', 'minute' => 'Fermé',
                ],
                'hours' => ['20' => '20', '21' => '21','22' => '22','23' => '23'],
                'minutes' => [ '15' => '15','30' => '30', '45' => '45','00' => '00'],
                'required' => false
            ])

            ->add('coversPossible', IntegerType::class, [
                    "label" => "Nombre de couverts possibles ?",
            ]);

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Openingdays::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'register_item',
        ]);
    }
}