<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;//pour la request
//use Doctrine\DBAL\Types\TextType;   //ne pas oublier d ajouter class Article
use Symfony\Component\Form\Extension\Core\Type\TextType; //ajouter pour le form champ textType
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Time; //ajouter pour le form champ textType


class CvController extends Controller
{
    
/**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('cv/home.html.twig', [
            'controller_name' => 'MaDemoController',
        ]);
    }

/**
     * @Route("/base", name="base")
     */
    public function base()
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'MaDemoController',
        ]);
    }
     
    
}
