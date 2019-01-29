<?php
namespace App\DataFixtures;
 use Doctrine\Bundle\FixturesBundle\Fixture;
 use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\article;   //pas oublier d'ajouter la class Article

class ArticleFixtures extends fixture
{
	public function load(ObjectManager $manager)
	{ 
		for($i = 1;$i <= 10; $i++){
			$article = new Article();
		$article->setTitle("Titre de l'article n $i")
                        ->setContent("<p>article blablabla</p>")
			->setImage("http://placehold.it/350x150")
			->setCreatedAt(new \DateTime());
		$manager->persist($article); //prepare article
	}
 		$manager->flush();  //envoie vers la db
	}
}