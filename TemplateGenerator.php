<?php
class TemplateGenerator{
    public function getTemplate($content){
        $templateString = file_get_contents('templates/templateData.html');
        return str_replace('{{content}}', $content, $templateString);
    }
}