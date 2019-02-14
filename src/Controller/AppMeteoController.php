<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;//pour la request
//use Doctrine\DBAL\Types\TextType;   //ne pas oublier d ajouter class Article
use Symfony\Component\Form\Extension\Core\Type\TextType; //ajouter pour le form champ textType
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Time; //ajouter pour le form champ textType

class AppMeteoController extends AbstractController
{
    /**
     * @Route("/app/meteo", name="meteo")
     */
    public function meteo()
    {
        return $this->render('cv/meteo.html.twig', [
            'controller_name' => 'AppMeteoController',
        ]);
    }
}



