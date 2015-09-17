<?php

namespace Alterd\Controller;

use Alterd\Entity\Skill;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SkillsController extends Controller {
    /**
     * @Route("/app/example", name="homepage")
     */

    public function indexAction(){
        return $this->render('default/index.html.twig', array());
    }

    public function listAction(){
        $repository = $this->getDoctrine()
            ->getRepository('AlterdBundle:Skill');
        $skills = $repository->findAll();
        return new JsonResponse(
            array_map(array($this, 'all'), $skills)
        );
    }


    public function addAction(Request $request){
        if($request->getMethod() == 'POST'){

            $postData = json_decode($request->request->get('post'), true);
        }
        else{
            return new Response('No data');
        }

        $skill = new Skill();

        $skill->setSkillName($postData['skill_name']);
        $skill->setSkillExpertise($postData['skill_expertise']);
        $skill->setSkillDescription($postData['skill_description']);


        $em = $this->getDoctrine()->getManager();

        $em->persist($skill);
        $em->flush();

        return new JsonResponse('Skill Added Successfully');
    }
}
