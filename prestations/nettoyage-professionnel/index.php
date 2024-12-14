<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Prestations / Nettoyage professionnel"
]);

$page->description = "Clean R & Rénovation offre des services de nettoyage professionnel pour locaux commerciaux, industriels et tertiaires. Nettoyage après travaux, désinfection, entretien des sols et surfaces.";
$page->keywords = "nettoyage professionnel, nettoyage après travaux, désinfection locaux, entretien surfaces, nettoyage sols, nettoyage vitres, nettoyage industriel, nettoyage bureaux, Suisse romande, Genève";

$page->setContentFromFile("../../pages/prestations/nettoyage-professionnel.html")->render();
?>