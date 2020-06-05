<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;

class AdherantController extends AbstractController
{
    /**
     * @Route("/adherant", name="adherant")
     */
    public function index()
    {
        return $this->render('adherant/index.html.twig', [
            'controller_name' => 'AdherantController',
        ]);
    }
}
