<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    /**
     * @Route("/example/{limit}", name="example", requirements={"limit"="[0,9]+"} )
     */
    public function index(int $limit = 5  )
    {
        return $this->render('example/index.html.twig', [
            'controller_name' => 'ExampleController',
            'DisplayFooter' => false,
            'limits' => $limit,
        ]);
    }
}
