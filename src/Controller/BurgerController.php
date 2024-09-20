<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{
    const burgers = [["name"=>"classique burger","description"=>"c'est comme un burger mais c'est un classique","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmKdHqltQzh6PJ6tIoQKphZffHmgRfSb2aZg&s"], ["name"=>"Avocado Burger","description"=>"ya de l'avocat quoi...","img"=>"https://recipecontent.fooby.ch/13723_3-2_480-320.jpg"], ["name"=>"Spicy Burger","description"=>"ca pique","img"=>"https://burgerkingfrance.twic.pics/custom-pages/2024/20240417_ChickenSpicy/header.png"]];

    #[Route('/burgers', name: 'burgers')]
    public function liste(): Response
    {
        return $this->render('burgers.html.twig',['burgers' => self::burgers]);
    }

    #[Route('/burgers/{id}', name: 'detail', methods: ['GET', 'POST'])]
    public function show($id): Response
    {
        return $this->render('description.html.twig',['burgers' => self::burgers[$id]]);
    }
}

?>