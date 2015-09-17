<?php

namespace Alterd\Controller;

use Alterd\Entity\CharacterSheet;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CharacterSheetController extends Controller {
    /**
     * @Route("/app/example", name="homepage")
     */

    public function indexAction(){
        return $this->render('default/index.html.twig', array());
    }

    public function fetchAllAction(){
        $characterSheet = new CharacterSheet();

        $repository = $this->getDoctrine()
            ->getRepository('AlterdBundle:CharacterSheet');
        $sheets = $repository->findAll();
        return new JsonResponse(
            array_map(array($this, 'all'), $sheets)
        );
    }

    public function generateAction(Request $request){
        if($request->getMethod() == 'POST'){

            $postData = json_decode($request->request->get('post'), true);
        }
        else{
            return new Response('No data');
        }

        $characterSheet = new CharacterSheet();

        $characterSheet->setUid($postData['uid']);
        $characterSheet->setCharacterName($postData['character_name']);
        $characterSheet->setCharacterHp($postData['character_hp']);
        $characterSheet->setCharacterEn($postData['character_en']);
        $characterSheet->setCharacterRace($postData['character_race']);
        $characterSheet->setCharacterLevel($postData['character_level']);
        $characterSheet->setCharacterSkillPoints($postData['character_skill_points']);
        $characterSheet->setCharacterStatPoints($postData['character_stat_points']);
        $characterSheet->setCharacterSkills($postData['character_skills']);
        $characterSheet->setCharacterAbilities($postData['character_abilities']);
        $characterSheet->setCharacterStr($postData['character_str']);
        $characterSheet->setCharacterAgi($postData['character_agi']);
        $characterSheet->setCharacterInt($postData['character_int']);
        $characterSheet->setCharacterSpd($postData['character_spd']);
        $characterSheet->setCharacterWp($postData['character_wp']);
        $characterSheet->setCharacterExp($postData['character_experience']);
        $characterSheet->setCharacterMoney($postData['character_money']);
        $characterSheet->setCharacterInventory($postData['character_inventory']);
        $characterSheet->setCharacterInfo($postData['character_info']);

        $em = $this->getDoctrine()->getManager();

        $em->persist($characterSheet);
        $em->flush();

        return new JsonResponse('Character Sheet Generated Successfully');
    }

    public function viewAction(Request $request){
        if($request->getMethod() == 'POST'){
            $getData = json_decode($request->request->get('post'), true);
            $repository = $this->getDoctrine()
                ->getRepository('AlterdBundle:CharacterSheet');

            $sheet = $repository->findOneByUid(intval($getData['uid']));
        }
        else{
            return new Response('No data');
        }

        return new JsonResponse($sheet->getFields());

    }

    public function editAction(){

    }

    public function updateAction(Request $request){
        if($request->getMethod() == 'POST'){

            $postData = json_decode($request->request->get('post'), true);

            $characterSheetRepository = $this->getDoctrine()
                ->getRepository('AlterdBundle:CharacterSheet');

            $characterSheet = $characterSheetRepository->findOneByUid($postData['uid']);

            if (!$characterSheet) {
                throw $this->createNotFoundException(
                    'No product found for id '.$postData['uid']
                );
            }


            //Fields to update
            $characterSheet->setCharacterName($postData['character_name']);
            $characterSheet->setCharacterHp($postData['character_hp']);
            $characterSheet->setCharacterEn($postData['character_en']);
            $characterSheet->setCharacterRace($postData['character_race']);
            $characterSheet->setCharacterLevel($postData['character_level']);
            $characterSheet->setCharacterSkillPoints($postData['character_skill_points']);
            $characterSheet->setCharacterStatPoints($postData['character_stat_points']);
            $characterSheet->setCharacterSkills($postData['character_skills']);
            $characterSheet->setCharacterAbilities($postData['character_abilities']);
            $characterSheet->setCharacterStr($postData['character_str']);
            $characterSheet->setCharacterAgi($postData['character_agi']);
            $characterSheet->setCharacterInt($postData['character_int']);
            $characterSheet->setCharacterSpd($postData['character_spd']);
            $characterSheet->setCharacterWp($postData['character_wp']);
            $characterSheet->setCharacterExp($postData['character_experience']);
            $characterSheet->setCharacterMoney($postData['character_money']);
            $characterSheet->setCharacterInventory($postData['character_inventory']);
            $characterSheet->setCharacterInfo($postData['character_info']);


            //Saving record...
            $em = $this->getDoctrine()->getManager();

            $em->persist($characterSheet);
            $em->flush();

            return new JsonResponse($postData);
        }
        else{
            return new Response('No data');
        }

    }

    public function all($fields){
        return $fields->getFields();
    }
}
