<?php

namespace App\Controller;

use App\MessageGenerator\MessageSenderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(MessageSenderInterface $messageSender): Response
    {
        $message = $messageSender->send('fr');
        //$message = $messageSender->send('en');

        return $this->render('home/index.html.twig', [
            'controller_name' => $message,
        ]);
    }
}
