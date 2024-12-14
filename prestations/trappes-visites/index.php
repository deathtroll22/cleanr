<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Prestations / Trappes de visites"
]);

$page->description = "Clean R & Rénovation installe des trappes de visite pour un accès sécurisé aux zones techniques. Installation sur murs, plafonds ou planchers, adaptée à vos besoins résidentiels, commerciaux ou industriels.";
$page->keywords = "installation trappes de visite, trappes de visite métalliques, trappes coupe-feu, accès zones techniques, maintenance trappes, trappes pour conduits, trappes pour murs et plafonds, Genève, Suisse romande";

$page->setContentFromFile("../../pages/prestations/trappes-visites.html")->render();
?>