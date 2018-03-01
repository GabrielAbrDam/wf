<?php
namespace download;
function fileCSV(){
    $resourceFile = 'https://api.apis.guru/v2/list.json';
    $data = json_decode(file_get_contents($resourceFile), true);
    
   
    //print_r($data);
    return $data; 
}
