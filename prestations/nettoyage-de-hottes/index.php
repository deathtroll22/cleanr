<?php

require_once("../../autoload.php");

use App\Page;

$page = new Page([
    "title" => "Prestations / Dégraissage des installations de ventilation"
]);

$page->setContentFromFile("../../pages/prestations/nettoyage-de-hottes.html")->render();