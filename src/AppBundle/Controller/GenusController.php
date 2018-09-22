<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GenusController
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function ShowAction($genusName = "empty")
    {
        return new Response($genusName . ' is under the sea!');
    }
}
