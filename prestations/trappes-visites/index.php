<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Prestations / Trappes de visites"
]);

$page->description = "Clean R & Rénovation installe des trappes de visite pour accès sécurisé : murs, plafonds, planchers. Solutions résidentielles et industrielles adaptées.";
$page->keywords = "installation trappes de visite, trappes de visite métalliques, trappes coupe-feu, accès zones techniques, maintenance trappes, trappes pour conduits, trappes pour murs et plafonds, Genève, Suisse romande";
$page->setContentFromFile("../../pages/prestations/trappes-visites.html")->render();
?>