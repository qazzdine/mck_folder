<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class aqa1Controller extends AbstractController
{

    /**
     * @Route("aqa1_function")
     */

    function aqa1_function()
    {

        return new Response("Shehrazad");
    }

    /**
     * @Route("ramadan/{siyam}")
     */

    function show($siyam)
    {
        return new Response(sprintf('Takaballa Allah  "%s" ',
        $siyam));
    }
}