<?php

require_once("autoload.php");

use App\Page;

// Définir les métadonnées spécifiques pour la page d'accueil
$page = new Page([
    "title" => "Accueil | Clean R - Spécialiste du nettoyage de cuisine industrielle",
    "description" => "Clean R & Rénovation, expert en nettoyage de hottes et cuisines pro à Genève, Carouge, Annemasse. Devis gratuit, intervention rapide !",
    "keywords" => "nettoyage hottes Genève, nettoyage cuisine industrielle, dégraissage hotte restaurant, nettoyage professionnel Grand Genève, entretien cuisine industrielle, nettoyage système extraction Genève"
    ]);

// Charger le contenu de la page d'accueil
$page->setContentFromFile("pages/accueil.html")->render();