<?php

require_once("../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Clean R & Rénovation | Nettoyage de hottes et cuisines professionnelles en Suisse romande",
    "description" => "Clean R & Rénovation, votre spécialiste du nettoyage de hottes et cuisines professionnelles dans le Grand Genève et toute la Suisse romande. Qualité garantie, techniciens certifiés et tarifs transparents.",
    "keywords" => "nettoyage hottes Genève, dégraissage professionnel, nettoyage cuisines industrielles, hygiène cuisine restaurant, Suisse romande, Genève, Lausanne, Carouge, Annemasse, normes sécurité alimentaire"
]);

$page->setContentFromFile("../pages/entreprise.html")->render();