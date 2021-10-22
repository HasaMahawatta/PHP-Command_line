<?php
//var_dump($argv);

//https://api.publicapis.org/entries

$url = 'https://api.publicapis.org/entries';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPGET, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($curl);
curl_close($curl);
$response=json_decode($response_json, true);


function ApiFetch($response){
      $array=[];
      foreach($response['entries'] as $row){
            array_push($array,$row['API']);
         //   var_dump($row['API']);
        
        }
        rsort($array,SORT_STRING);
        foreach($array as $arr){
            echo "$arr \n";
       }

       
        
};
ApiFetch($response)
?>