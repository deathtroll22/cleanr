<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Prestations / Dégraissage des installations de ventilation"
]);

$page->description = "Clean R & Rénovation est spécialisé dans le dégraissage de hottes et ventilations professionnelles. Intervention complète avec nettoyage des gaines, filtres et moteurs. Qualité et sécurité garanties.";
$page->keywords = "nettoyage hottes Genève, dégraissage ventilation, nettoyage gaines aspiration, nettoyage moteur hotte, entretien hotte restaurant, dégraissage cuisine professionnelle, traitement inox, Suisse romande, Grand Genève";

$page->setContentFromFile("../../pages/prestations/nettoyage-de-hottes.html")->render();
?>