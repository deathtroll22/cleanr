<?php

require_once("../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Partenaires"
]);

$page->description = "Découvrez les partenaires de Clean R & Rénovation, spécialistes du nettoyage de hottes et cuisines professionnelles en Suisse romande et dans le Grand Genève.";
$page->keywords = "partenaires Clean R, Burger King Suisse, Hostellerie du Château Rolle, L'écorse Restaurant Carouge, nettoyage cuisines professionnelles, dégraissage hottes Genève";

$page->setContentFromFile("../pages/partenaires.html")->render();
?>