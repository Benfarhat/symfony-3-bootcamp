<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}", name="genus")
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
}
