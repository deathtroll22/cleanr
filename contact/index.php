<?php

require_once("../autoload.php");

use App\Page;

session_start();

$fields = ["name", "society", "mail", "phone", "subject", "message"];
$form_content = [];

foreach ($fields as $field) {
    $form_content[$field] = $_SESSION[$field] ?? "";
}

$page = new Page([
    "title" => "Contact",
    "variables" => $form_content
]);

$page->description = "Contactez Clean R & Renovation pour un devis gratuit. Remplissez notre formulaire ou appelez-nous directement au +41 79 574 34 35. Services de nettoyage professionnel en Suisse romande et Grand Genève.";
$page->keywords = "contact Clean R, devis nettoyage, formulaire contact, devis gratuit nettoyage Genève, nettoyage professionnel, Suisse romande, Grand Genève";

$page->setContentFromFile("../pages/contact/form.html")->render();
?>