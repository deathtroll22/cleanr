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

$page->description = "Contactez Clean R & Renovation pour un devis gratuit en nettoyage professionnel. Appelez le +41 79 574 34 35.";
$page->keywords = "contact Clean R, devis nettoyage, formulaire contact, devis gratuit nettoyage Genève, nettoyage professionnel, Suisse romande, Grand Genève";

$page->setContentFromFile("../pages/contact/form.html")->render();
?>