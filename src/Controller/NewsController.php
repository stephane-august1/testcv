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
use Symfony\Component\Validator\Constraints\Time; //ajouter pour le time

class NewsController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function article()
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);//creer une var repo lire article avec doctrine
        $articles = $repo->findAll();  //trouve tt les articles

        return $this->render('cv/article.html.twig', [
            'controller_name' => 'MaDemoController',
            'articles' => $articles   //lier article au twig
        ]);
    }

    /**
     * @Route("/news", name="news")
     * @Route("news/{id}",name="blog_edit")
     */
    public function news(Article $article = null,Request $request, ObjectManager $manager)
    {
        /*Si article est vide creer un nouveau*/ 
        if(!$article){
        $article =new Article();
        }
       
/*===============================================*/
   /* creation du formulaire */
        $form = $this->createFormBuilder($article)
                    ->add('title') 
                    ->add('content')
                    ->add('image')
                    ->getForm();
// ========================================//
  /* Traitement de la requette*/
        $form->handleRequest($request);
// ========================================//
    /* Si la requette soumise et valide fait new article*/

     if($form->isSubmitted() && $form->isValid()){
         if(!$article->getId()){
        // $article->setCreatedAt(new \DateTime());
         $article->setCreatedAt(new \DateTime());
        }
         $manager->persist($article);
         $manager->flush();
         return $this->redirectToRoute('show',[ 'id' =>$article->getId()]);
     }

        return $this->render('cv/new.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);
        }

       /**
     * @Route("/show/{id}", name="show")
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repo->find($id);
        return $this->render('cv/show.html.twig', [
            'article' => $articles
        ]);
    } 
}