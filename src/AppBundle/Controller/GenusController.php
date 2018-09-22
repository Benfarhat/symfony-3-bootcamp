<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Serializer\Encoder\JsonEncode;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function ShowAction($genusName = "empty")
    {
        $notes = [
            'Manducare diligenter ducunt ad germanus absolutio.',
            'The vision is a unveiled teacher.',
            'Peel asparagus carefully, then mix with whipped cream and serve carefully raw in bowl.',
            'Madness is a stormy yardarm.',
            'Calm, apocalyptic dosis finally eat a virtual, intelligent phenomenan.'
        ];
        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'notes' => $notes
        ]);
    }

    /**
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction($genusName){
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];
        $data = [
            'notes' => $notes
        ];

        //return new Response(json_encode($data));
        return new JsonResponse($data); // This will add to the header the format application/json
    }

}
