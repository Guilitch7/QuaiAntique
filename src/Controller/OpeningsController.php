<?php

namespace App\Controller;

use App\Repository\OpeningdaysRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OpeningsController extends AbstractController
{
    #[Route('/openings', name: 'app_openings')]
    public function readAll(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(OpeningdaysRepository::class);
        $monday = $repository->find(['id' => '1']);

        $mLunchOpen = $monday->getOpenLunch();
        $mondayLunchOpen = mktime($mLunchOpen);
        $mLunchClose = $monday->getCloseLunch();
        $mondayLunchClose = mktime($mLunchClose);

        $mDinnerOpen = $monday->getOpenDinner();
        $mondayDinnerOpen = mktime($mDinnerOpen);
        $mDinnerClose = $monday->getCloseDinner();
        $mondayDinnerClose = mktime($mDinnerClose);

        $mondaySlots = [];
        $i=0;
        while(($mondayLunchClose-($mondayLunchOpen+$i+3600))>0){
            array_push($mondaySlots,($mondayLunchClose-($mondayLunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($mondayDinnerClose-($mondayDinnerOpen+$j+3600))>0){
            array_push($mondaySlots,($mondayDinnerClose-($mondayDinnerOpen+$j+3600)));
            $j+900;
        }

        $tuesday = $repository->find(['id' => '2']);

        $tuLunchOpen = $tuesday->getOpenLunch();
        $tuesdayLunchOpen = mktime($tuLunchOpen);
        $tuLunchClose = $tuesday->getCloseLunch();
        $tuesdayLunchClose = mktime($tuLunchClose);

        $tuDinnerOpen = $tuesday->getOpenDinner();
        $tuesdayDinnerOpen = mktime($tuDinnerOpen);
        $tuDinnerClose = $tuesday->getCloseDinner();
        $tuesdayDinnerClose = mktime($tuDinnerClose);

        $tuesdaySlots = [];
        $i=0;
        while(($tuesdayLunchClose-($tuesdayLunchOpen+$i+3600))>0){
            array_push($tuesdaySlots,($tuesdayLunchClose-($tuesdayLunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($tuesdayDinnerClose-($tuesdayDinnerOpen+$j+3600))>0){
            array_push($tuesdaySlots,($tuesdayDinnerClose-($tuesdayDinnerOpen+$j+3600)));
            $j+900;
        }


        $wednesday = $repository->find(['id' => '3']);

        $wLunchOpen = $wednesday->getOpenLunch();
        $wednesdayLunchOpen = mktime($wLunchOpen);
        $wLunchClose = $wednesday->getCloseLunch();
        $wednesdayLunchClose = mktime($wLunchClose);

        $wDinnerOpen = $wednesday->getOpenDinner();
        $wednesdayDinnerOpen = mktime($wDinnerOpen);
        $wDinnerClose = $wednesday->getCloseDinner();
        $wednesdayDinnerClose = mktime($wDinnerClose);

        $wednesdaySlots = [];
        $i=0;
        while(($wednesdayLunchClose-($wednesdayLunchOpen+$i+3600))>0){
            array_push($wednesdaySlots,($wednesdayLunchClose-($wednesdayLunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($wednesdayDinnerClose-($wednesdayDinnerOpen+$j+3600))>0){
            array_push($wednesdaySlots,($wednesdayDinnerClose-($wednesdayDinnerOpen+$j+3600)));
            $j+900;
        }

        $thursday = $repository->find(['id' => '4']);

        $thLunchOpen = $thursday->getOpenLunch();
        $thursdayLunchOpen = mktime($thLunchOpen);
        $thLunchClose = $thursday->getCloseLunch();
        $thursdayLunchClose = mktime($thLunchClose);

        $thDinnerOpen = $thursday->getOpenDinner();
        $thursdayDinnerOpen = mktime($thDinnerOpen);
        $thDinnerClose = $thursday->getCloseDinner();
        $thursdayDinnerClose = mktime($thDinnerClose);

        $thursdaySlots = [];
        $i=0;
        while(($thursdayLunchClose-($thursdayLunchOpen+$i+3600))>0){
            array_push($thursdaySlots,($thursdayLunchClose-($thursdayLunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($thursdayDinnerClose-($thursdayDinnerOpen+$j+3600))>0){
            array_push($thursdaySlots,($thursdayDinnerClose-($thursdayDinnerOpen+$j+3600)));
            $j+900;
        }


        $friday = $repository->find(['id' => '5']);

        $fLunchOpen = $friday->getOpenLunch();
        $fridayLunchOpen = mktime($fLunchOpen);
        $fLunchClose = $friday->getCloseLunch();
        $fridayLunchClose = mktime($fLunchClose);

        $fDinnerOpen = $friday->getOpenDinner();
        $fridayDinnerOpen = mktime($fDinnerOpen);
        $fDinnerClose = $friday->getCloseDinner();
        $fridayDinnerClose = mktime($fDinnerClose);

        $fridaySlots = [];
        $i=0;
        while(($fridayLunchClose-($fridayLunchOpen+$i+3600))>0){
            array_push($fridaySlots,($fridayLunchClose-($fridayLunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($fridayDinnerClose-($fridayDinnerOpen+$j+3600))>0){
            array_push($fridaySlots,($fridayDinnerClose-($fridayDinnerOpen+$j+3600)));
            $j+900;
        }


        $saturday = $repository->find(['id' => '6']);

        $saLunchOpen = $saturday->getOpenLunch();
        $saturdayLunchOpen = mktime($saLunchOpen);
        $saLunchClose = $saturday->getCloseLunch();
        $saturdayLunchClose = mktime($saLunchClose);

        $saDinnerOpen = $saturday->getOpenDinner();
        $saturdayDinnerOpen = mktime($saDinnerOpen);
        $saDinnerClose = $saturday->getCloseDinner();
        $saturdayDinnerClose = mktime($saDinnerClose);

        $saturdaySlots = [];
        $i=0;
        while(($saturdayLunchClose-($saturdayLunchOpen+$i+3600))>0){
            array_push($saturdaySlots,($saturdayLunchClose-($saturdayLunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($saturdayDinnerClose-($saturdayDinnerOpen+$j+3600))>0){
            array_push($saturdaySlots,($saturdayDinnerClose-($saturdayDinnerOpen+$j+3600)));
            $j+900;
        }


        $sunday = $repository->find(['id' => '7']);

        $suLunchOpen = $sunday->getOpenLunch();
        $sundayLunchOpen = mktime($suLunchOpen);
        $suLunchClose = $sunday->getCloseLunch();
        $sundayLunchClose = mktime($suLunchClose);

        $suDinnerOpen = $sunday->getOpenDinner();
        $sundayDinnerOpen = mktime($suDinnerOpen);
        $suDinnerClose = $sunday->getCloseDinner();
        $sundayDinnerClose = mktime($suDinnerClose);

        $sundaySlots = [];
        $i=0;
        while(($sundayLunchClose-($sundayLunchOpen+$i+3600))>0){
            array_push($sundaySlots,($sundayLunchClose-($sundayLunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($sundayDinnerClose-($sundayDinnerOpen+$j+3600))>0){
            array_push($sundaySlots,($sundayDinnerClose-($sundayDinnerOpen+$j+3600)));
            $j+900;
        }


        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('menus/index.html.twig', [
            'monday' => $mondaySlots,
            'tuesday' => $mondaySlots,
            'wednesday' => $mondaySlots,
            'thursday' => $mondaySlots,
            'friday' => $mondaySlots,
            'saturday' => $mondaySlots,
            'sunday' => $mondaySlots,

            'controller_name' => 'MenusController',
            'title' => 'Créneaux horaires',
            'current_menu' => 'menus',

        ]);
    }
}
