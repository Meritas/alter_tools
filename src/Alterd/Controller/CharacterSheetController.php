<?php

namespace Alterd\Controller;

use Alterd\Entity\CharacterSheet;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CharacterSheetController extends Controller {
    /**
     * @Route("/app/example", name="homepage")
     */

    public function indexAction(){
        return $this->render('default/index.html.twig', array());
    }

    public function generateAction(){
        $userEntity = new User();

        $characterSheet = new CharacterSheet();

        $characterSheet->setCharacterName('Dummy Character');
        $characterSheet->setCharacterHp(100);
        $characterSheet->setCharacterEn(100);
        $characterSheet->setCharacterStr(10);
        $characterSheet->setCharacterAgi(10);
        $characterSheet->setCharacterSpd(10);
        $characterSheet->setCharacterWp(10);
        $characterSheet->setCharacterMoney(500);
        $characterSheet->setCharacterInventory('Empty');
        $characterSheet->setCharacterInfo('');

        $em = $this->getDoctrine()->getManager();

        $em->persist($characterSheet);
        $em->flush();
    }

    public function editAction(){

    }

    public function updateAction(Request $request){
        if($request->getMethod() == 'POST'){

            $postData = json_decode($request->request->get('post'), true);

            return new JsonResponse($postData);
        }
        else{
            return new Response('No data');
        }
    }
}
