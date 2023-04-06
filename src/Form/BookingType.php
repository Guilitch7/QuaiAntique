<?php

namespace App\Form;

use App\Entity\Bookings;
use App\Entity\Openingdays;
use App\Controller\OpeningsController;
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
use Symfony\Component\Form\FormInterface;
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
        return $this->security->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $table = new Bookings();
        $user = $this->security->getUser();

        if(isset($user)){
          $covers = $user->getcoversNumber();
          $allergies = $user->getfoodAllergies();
          $builder
            ->add('OPENINGDAYSday', EntityType::class, ['label' => 'Quel jour souhaitez-vous venir ?', 'class' => Openingdays::class, 'mapped' => false, 'choice_label' => 'OPENINGDAYSday', 'placeholder' => 'Jour ?',])
            ->add('BookSlotDate', DateType::class, [
                'label' => "A quelle date ?",
                'widget' => 'single_text',
                'required' => true,])
            ->add('slotLunch', ChoiceType::class, [ 'label' => 'Choisissez un créneau de réservation', 'placeholder' => 'Créneau', 'required' => false])
            ->add("BookSlotUser", TextType::class, ["label" => "Quel est votre nom ?",
            "required" => true,])
            ->add("BookSlotCovers", IntegerType::class, ["label" => "Combien de convives serez-vous ?", "required" => true, "data" => $covers])
            ->add("BookSlotAllergies", ChoiceType::class, ["label" => "De quelles éventuelles allergies alimentaires les convives souffrent-ils ?", "required" => false, "data" => $allergies,
                'choices'  => [
                    'Crustacés' => 'Crustacés',
                    'Viande' => 'Viande',
                    'Poisson' => 'Poisson',
                    'Gluten' => 'Gluten'],])
            ->getForm();

          $formMofidier = function(FormInterface $form, $day = null) {
            $slotLunch = null === $day ? ['Le restaurant est fermé ce jour'] : $day->getslotLunch();

            $form->add('slotLunch', EntityType::class, [
                'class' => OPENINGDAYS::class,
                'choices' => $slotLunch,
                'required' => false,
                'choice_label' => 'slotLunch',
                'placeholder' => 'Créneau',
                'attr' => ['class' => 'custom-select'],
                'label' => 'Choisissez un créneau de réservation'
            ]);
        };
          $builder->get('OPENINGDAYSday')->addEventListener(
            FormEvents::POST_SUBMIT, 
            function(FormEvent $event) use ($formMofidier) {
                $day = $event->getForm()->getData();
                $formMofidier($event->getForm()->getParent(), $day);
                    });
        }
        else {
          $builder
            ->add('BookSlotDate', DateType::class, [
                'label' => "Date",
                'widget' => 'single_text',
                "required" => true,])
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
