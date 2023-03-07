<?php

namespace App\Form;

use App\Entity\Bookings;
use App\Entity\Openingdays;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class BookingType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('datetime', DateType::class, [
            //                                        'widget' => 'choice',
            //                                    ])
            ->add('BookSlotDate', DateType::class, [
                                                    'label' => 'Date',
                                                    "required" => true,
                                                ])
                                            
            ->add("BOOKINGStimeslot", EntityType::class, [  
                                                "class" => Openingdays::class,
                                                "choice_label" => "timeslotlunch",
                                                "choice_label" => "timeslotdinner",
                                                'label' => 'Créneau horaire',
                                                "required" => true
            ])
            ->add("BookSlotUser", TextType::class, ["label" => "Votre nom",
                                                    "required" => true,])
            ->add("BookSlotCovers", IntegerType::class, ["label" => "Convives", "required" => true])
            ->add("BookSlotAllergies", ChoiceType::class, ["label" => "Allergies", "required" => false,
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
            "data_class" => Bookings::class,
        ]);
    }
}