<?php

namespace App\Form;

use App\Entity\Bookings;
use App\Entity\Openingdays;
use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class BookingType extends AbstractType
{

    public function __construct(
        private Security $security,
    ){
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $table = new Bookings();
        $user = $this->security->getUser();

        if(isset($user)){
          $covers = $user->getcoversNumber();
          $allergies = $user->getfoodAllergies();
          $builder
            ->add('day', EntityType::class, ['label' => 'Quel jour souhaitez-vous venir', 'class' => Openingdays::class,])
            ->add('slotLunch', EntityType::class, [ 'placeholder' => 'Choisir un créneau de réservation', 'class' => Openingdays::class,])
            ->add('slotDinner', EntityType::class, ['placeholder' => 'Choisir un créneau de réservation', 'class' => Openingdays::class,])
            ->add('BookSlotDate', DateType::class, [
                'label' => "Date",
                'widget' => 'single_text',
                'required' => true,])

//            ->addEventListener(FormEvents::POST_SET_DATA, function(FormEvent $event) {
//                $date = $event->getForm()->getViewData('BookSlotDate');
//                $dateDay = date('l', $date);
//                switch ($dateDay) {
//                    case "lundi" : $event->getForm()->add('Bookingstimeslot', TimeType::class);
//                    case "mardi" : $event->getForm()->add('Bookingstimeslot', TimeType::class);
//                    case "mercredi" : $event->getForm()->add('Bookingstimeslot', TimeType::class);
//                    case "jeudi" : $event->getForm()->add('Bookingstimeslot', TimeType::class);
//                    case "vendredi" : $event->getForm()->add('Bookingstimeslot', TimeType::class);
//                    case "samedi" : $event->getForm()->add('Bookingstimeslot', TimeType::class);
//                    case "dimanche" : $event->getForm()->add('Bookingstimeslot', TimeType::class);
//                }
//            })
            ->add("BookSlotUser", TextType::class, ["label" => "Votre nom",
                        "required" => true,])
            ->add("BookSlotCovers", IntegerType::class, ["label" => "Convives", "required" => true, "data" => $covers])
            ->add("BookSlotAllergies", ChoiceType::class, ["label" => "Allergies", "required" => false, "data" => $allergies,
                            'choices'  => [
                                'Crustacés' => 'Crustacés',
                                'Viande' => 'Viande',
                                'Poisson' => 'Poisson',
                                'Gluten' => 'Gluten'],])
            ->getForm();
        }
        else {
          $builder
            ->add('BookSlotDate', DateType::class, [
                'label' => "Date",
                'widget' => 'single_text',
                "required" => true,])
//            ->add("BOOKINGStimeslot", EntityType::class, [  
//                    "class" => Openingdays::class,
//                    "choice_label" => "timeslotlunch",
//                    'multiple' => true,
//                    'expanded' => true,
//                    "choice_label" => "timeslotdinner",
//                    'label' => 'Créneau horaire',
//                    "required" => true])
            ->add("BookSlotUser", TextType::class, ["label" => "Votre nom",
                        "required" => true,])
            ->add("BookSlotCovers", IntegerType::class, ["label" => "Convives", "required" => true])
            ->add("BookSlotAllergies", ChoiceType::class, ["label" => "Allergies des convives", "required" => false,
                            'choices'  => [
                                'Crustacés' => 'Crustacés',
                                'Viande' => 'Viande',
                                'Poisson' => 'Poisson',
                                'Gluten' => 'Gluten',
                                'Lactose' => 'Lactose'],]);
        }
    }

        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                "data_class" => Bookings::class,
            ]);
        }
            
    }
