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
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;
use Webmozart\Assert\Assert as AssertAssert;

use function PHPUnit\Framework\greaterThanOrEqual;

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
            ->add('day', HiddenType::class, [])
            ->add('avaibilities', HiddenType::class, [])
            ->add('service', HiddenType::class, ['data' => 'null'])
            ->add('BookSlotDate', DateType::class, [
                'label' => "A quelle date ?",
                'widget' => 'single_text',
//                'format' => 'dd-MM-yyyy',
//                'years' => ['2023'],
                'required' => true,
                'attr' => ['class' => 'text-center fw-bold'],
                'constraints' => [new Assert\GreaterThanOrEqual(new DateTime(), message: 'Il n\'est pas possible de réserver dans le passé !')
            ],
            ])
            ->add('slotLunch', TimeType::class, [ 'label' => 'Choisissez un créneau de réservation', 'placeholder' => 'Heure/minutes', 'required' => true,
                                                'hours' => [ '11' => '11', '12' => '12','13' => '13','14' => '14','18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' =>'22', '23' => '23'],
                                                'minutes' => [ '00' => '00','15' => '15','30' => '30', '45' => '45'],
                                                'attr' => ['class' => 'text-center fw-bold'],
                                                ])
            ->add("BookSlotUser", TextType::class, ["label" => "Quel est votre nom ?","required" => true,'attr' => ['class' => 'text-center fw-bold'],])
            ->add("BookSlotCovers", IntegerType::class, ["label" => "Nombre de personnes ?", "required" => true, "data" => $covers,'attr' => ['class' => 'text-center fw-bold'],])
            ->add("BookSlotAllergies", ChoiceType::class, ["label" => "Avez-vous une allergie alimentaire à nous signaler ?", "required" => false, "data" => $allergies,
                'choices'  => [
                    'Crustacés' => 'Crustacés',
                    'Viande' => 'Viande',
                    'Arachide' => 'Arachide',
                    'Poisson' => 'Poisson',
                    'Gluten' => 'Gluten'],'attr' => ['class' => 'text-center fw-bold'],])
            ->getForm();
        }
        else {
          $builder
          ->add('day', HiddenType::class, [])
          ->add('avaibilities', HiddenType::class, [])
          ->add('service', HiddenType::class, ['data' => 'null'])
          ->add('BookSlotDate', DateType::class, [
              'label' => "A quelle date ?",
              'widget' => 'single_text',
//                'format' => 'dd-MM-yyyy',
//                'years' => ['2023'],
              'required' => true,
              'attr' => ['class' => 'text-center fw-bold'],
              'constraints' => [new Assert\GreaterThanOrEqual(new DateTime(), message: 'Il n\'est pas possible de réserver dans le passé !')
          ],
          ])
          ->add('slotLunch', TimeType::class, [ 'label' => 'Choisissez un créneau de réservation', 'placeholder' => 'Heure/minutes', 'required' => true,
                                              'hours' => [ '11' => '11', '12' => '12','13' => '13','14' => '14','18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' =>'22', '23' => '23'],
                                              'minutes' => [ '00' => '00','15' => '15','30' => '30', '45' => '45'],
                                              'attr' => ['class' => 'text-center fw-bold'],
                                              ])
          ->add("BookSlotUser", TextType::class, ["label" => "Quel est votre nom ?","required" => true,'attr' => ['class' => 'text-center fw-bold'],])
          ->add("BookSlotCovers", IntegerType::class, ["label" => "Nombre de personnes ?", "required" => true, 'attr' => ['class' => 'text-center fw-bold'],])
          ->add("BookSlotAllergies", ChoiceType::class, ["label" => "Avez-vous une allergie alimentaire à nous signaler ?", "required" => false,
              'choices'  => [
                  'Crustacés' => 'Crustacés',
                  'Viande' => 'Viande',
                  'Arachide' => 'Arachide',
                  'Poisson' => 'Poisson',
                  'Gluten' => 'Gluten'],'attr' => ['class' => 'text-center fw-bold'],])
          ->getForm();
        };
}

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Bookings::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'register_item',
        ]);
    }
}
