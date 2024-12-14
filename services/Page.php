<?php

namespace App;

class Page {

    public ?string $title = null;
    public ?string $description = null; // Ajout de la description
    public ?string $keywords = null; // Ajout des mots-clés
    public ?string $content = null;
    public string $structure = "structure.php";
    public ?array $variables = [];

    public function __construct(array $configOptions = null)
    {
        if ($configOptions) {
            $props = ["title", "content", "structure", "variables", "description", "keywords"];

            foreach ($props as $key) {
                if (isset($configOptions[$key])) {
                    $this->$key = $configOptions[$key];
                }
            }
        }
    }

    /**
     * Défini le contenu de la page depuis un fichier.
     */
    public function setContentFromFile(string $filename): self
    {
        $this->content = file_get_contents($filename);
        return $this;
    }

    /**
     * Affiche la page
     */
    public function render()
    {
        $content = $this->content;
        foreach ($this->variables as $var => $value) {
            $content = str_replace("{".$var."}", $value, $content);
        }

        $page = $this;

        $page->content = $content;

        // Passe les métadonnées à la structure pour qu'elles soient accessibles dans la vue
        $page->title = $this->title;
        $page->description = $this->description;
        $page->keywords = $this->keywords;
        
        include(__DIR__ . "/../template/".$this->structure);
    }
}