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
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
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
//          ->add('OPENINGDAYSday', EntityType::class, ['label' => 'Quel jour souhaitez-vous venir ?', 'class' => Openingdays::class, 'mapped' => false, 'choice_label' => 'OPENINGDAYSday', 'placeholder' => 'Jour ?',])
            ->add('day', HiddenType::class, [])
            ->add('avaibilities', HiddenType::class, [])
            ->add('service', HiddenType::class, ['data' => 'null'])
            ->add('BookSlotDate', DateType::class, [
                'label' => "A quelle date ?",
                'widget' => 'single_text',
                'required' => true,])
            ->add('slotLunch', TimeType::class, [ 'label' => 'Choisissez un créneau de réservation', 'placeholder' => 'Créneau', 'required' => true,
                                                'hours' => [ '11' => '11', '12' => '12','13' => '13','14' => '14','18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' =>'22', '23' => '23'],
                                                'minutes' => [ '00' => '00','15' => '15','30' => '30', '45' => '45']
                                                ])
            ->add("BookSlotUser", TextType::class, ["label" => "Quel est votre nom ?","required" => true,])
            ->add("BookSlotCovers", IntegerType::class, ["label" => "Combien de convives serez-vous ?", "required" => true])
            ->add("BookSlotAllergies", ChoiceType::class, ["label" => "De quelles éventuelles allergies alimentaires les convives souffrent-ils ?", "required" => false,
                'choices'  => [
                    'Crustacés' => 'Crustacés',
                    'Viande' => 'Viande',
                    'Poisson' => 'Poisson',
                    'Gluten' => 'Gluten'],])
            ->getForm();

//          $formMofidier = function(FormInterface $form, $day = null) {
//            $slotLunch = null === $day ? ['Le restaurant est fermé ce jour'] : $day->getslotLunch();

//            $form->add('slotLunch', EntityType::class, [
//                'class' => OPENINGDAYS::class,
//                'choices' => $slotLunch,
//                'required' => false,
//                'choice_label' => 'slotLunch',
//                'placeholder' => 'Créneau',
//                'attr' => ['class' => 'custom-select'],
//                'label' => 'Choisissez un créneau de réservation'
//           ]);
//        };
//          $builder->get('OPENINGDAYSday')->addEventListener(
//            FormEvents::POST_SUBMIT, 
//            function(FormEvent $event) use ($formMofidier) {
//                $day = $event->getForm()->getData();
//                $formMofidier($event->getForm()->getParent(), $day);
//                    });
        }
        else {
          $builder
          ->add('day', HiddenType::class, [])
          ->add('avaibilities', HiddenType::class, [])
          ->add('service', HiddenType::class, ['data' => 'null'])
          ->add('BookSlotDate', DateType::class, [
              'label' => "A quelle date ?",
              'widget' => 'single_text',
              'required' => true,])
          ->add('slotLunch', TimeType::class, [ 'label' => 'Choisissez un créneau de réservation', 'placeholder' => 'Créneau', 'required' => true,
                                                'hours' => [ '11' => '11', '12' => '12','13' => '13','14' => '14','18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' =>'22', '23' => '23'],
                                                'minutes' => [ '00' => '00','15' => '15','30' => '30', '45' => '45']
                                                ])
          ->add("BookSlotUser", TextType::class, ["label" => "Quel est votre nom ?","required" => true,])
          ->add("BookSlotCovers", IntegerType::class, ["label" => "Combien de convives serez-vous ?", "required" => true, 'invalid_message' => 'Le nombre de personne doit être au minimum de 1',
          'invalid_message_parameters' => ['%num%' => 0],])
          ->add("BookSlotAllergies", ChoiceType::class, ["label" => "De quelles éventuelles allergies alimentaires les convives souffrent-ils ?", "required" => false,
              'choices'  => [
                  'Crustacés' => 'Crustacés',
                  'Viande' => 'Viande',
                  'Poisson' => 'Poisson',
                  'Gluten' => 'Gluten'],])
          ->getForm();
//          $formMofidier = function(FormInterface $form, $day = null) {
//                $Lunch = null === $day ? ['Le restaurant est fermé ce jour'] : $day->getOpenLunch();
//                $form->add('OpenLunch', EntityType::class, [
//                    'class' => OPENINGDAYS::class,
//                    'choices' => $Lunch,
//                    'required' => true,
//                    'choice_label' => 'OpenLunch',
//                    'placeholder' => 'Ouverture du jour',
    //                'hours' => [ '11' => '11', '12' => '12','13' => '13','14' => '14','18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' =>'22', '23' => '23'],
    //                'minutes' => [ '15' => '15','30' => '30', '45' => '45','00' => '00'],
    //                'attr' => ['class' => 'custom-select'],
    //        ]);
        };
//          $builder->get('OPENINGDAYSday')->addEventListener(
//            FormEvents::POST_SUBMIT, 
//            function(FormEvent $event) use ($formMofidier) {
//                $day = $event->getForm()->getData();
//                $formMofidier($event->getForm()->getParent(), $day);
//                    });    
//    }
}

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Bookings::class,
//            'csrf_protection' => true,
//            'csrf_field_name' => '_token',
//            'csrf_token_id' => 'register_item',
        ]);
    }
}
