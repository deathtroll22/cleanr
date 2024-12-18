<?php

require_once("../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Clean R | Nettoyage de hottes et cuisines professionnelles à Genève",
"description" => "Clean R & Rénovation, expert en nettoyage de hottes et cuisines pro en Suisse romande et Grand Genève. Qualité garantie, tarifs transparents.",
    "keywords" => "nettoyage hottes Genève, dégraissage professionnel, nettoyage cuisines industrielles, hygiène cuisine restaurant, Suisse romande, Genève, Lausanne, Carouge, Annemasse, normes sécurité alimentaire"
]);

$page->setContentFromFile("../pages/entreprise.html")->render();