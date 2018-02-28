<?php
function easterReverse($coucou){
    $fPath = fopen($coucou, 'r+');
    $fileContent = fread($fPath, filesize($coucou)); 
    $positionInitial = floor(strlen($fileContent)/2);
    fseek($fPath, $positionInitial, SEEK_SET);
    $secondPart = fread($fPath, filesize($coucou));
    $reversedText = strrev($secondPart);
    
    fseek($fPath, $positionInitial, SEEK_SET);
    fwrite($fPath, $reversedText);
    fclose($fPath); 

   
};



//(strlen($fileContent) / 2
//(strlen($fileContent) / 2;
//$fseek($fPath, 0, SEEK_END)