<?php

$SectionText = true;
$Questionnaire = false;
$is_posted_email = false;

if (isset($_POST["email"])){
					$is_posted = true;
					$email = $_POST["email"];
					
	}

if (isset($_POST['btnQuestionnaire'])){

				$Questionnaire = true;
				$SectionText = false;
				$chaine =0;
}




$chaine = 'PHP: Hypertext Preprocessor, plus connu sous son sigle PHP (acronyme récursif), est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n\importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook, Wikipédia, etc.. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web. En 2002, PHP est utilisé par plus de 8 millions de sites Web à travers le monde, en 2007 par plus de 20 millions et en 2013 par plus de 244 millions.De plus, PHP est devenu le langage de programmation web côté serveur le plus utilisé depuis plusieurs années. Enfin en 2010, PHP est le langage dont les logiciels open source sont les plus utilisés dans les entreprises, avec 57 % de taux de pénétration.La version actuelle est la version 7.1.8, sortie le 3 août 201716. Elle utilise Zend Engine 2 et introduit une modélisation objet plus performante, une gestion des erreurs fondée sur le modèle des exceptions, ainsi que des fonctionnalités de gestion pour les entreprises.';



?>


