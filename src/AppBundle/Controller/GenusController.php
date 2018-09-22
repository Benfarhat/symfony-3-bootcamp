<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}", name="genus", requirements={"genusName"="\d+"})
     */
    public function ShowAction($genusName = "empty")
    {
        $templating = $this->container->get('templating');
        return new Response($genusName . ' is under the sea!');
    }
}
