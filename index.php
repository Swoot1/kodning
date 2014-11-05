<?php
require_once 'TemplateGenerator.php';

$resource=$_SERVER['REQUEST_URI'];
$resource=explode('/', $resource)[2];
$template=new TemplateGenerator();

if($resource==='profilbild' || $resource===''){
    echo $template->getTemplate(file_get_contents('templates/profilbild.html'));
}elseif($resource==='kontakt'){
    echo $template->getTemplate(file_get_contents('templates/kontakt.html'));
}elseif($resource==='bakgrund'){
    echo $template->getTemplate(file_get_contents('templates/bakgrund.html'));
}elseif($resource==='cv'){
    echo $template->getTemplate(file_get_contents('templates/cv.html'));
}elseif ($resource==='tack'){
   $tackinfo=(file_get_contents('templates/tack.html'));
   foreach($_POST as $key=>$value){
        $tackinfo = str_replace(sprintf('{{%s}}', $key), $value, $tackinfo);
    }
    echo $template->getTemplate($tackinfo);
}
    else {
    echo $template->getTemplate(file_get_contents('templates/404.html'));
}