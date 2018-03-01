<?php
namespace format;
function jsonFormat($data){
    $formatedJson=[];
    $format = 'd-m-Y H:i:s';
    foreach ($data as $elementArray){
        
        
        $dateCreat = \DateTime::createFromFormat($format, $elementArray['added']);
        $prefVersion = $elementArray ['preferred'];
        
        $actuelVersion = $elementArray['versions'][$prefVersion];
        $update = \DateTime::createFromFormat($format, $actuelVersion['update']);
        
       $prefDescritpion = $actuelVersion['info']['descritpion'];
       $prefTitle = $actuelVersion['info']['description'];
        
       var_dump($prefTitle);
       
                
        
        
    }
      
}
 

