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

function UserInput($response, $category_limit){
      $array =[];
      $output = [];
      foreach($response['entries'] as $row){
            array_push($array,$row['Category']);
        
        }
        $input_split =  explode(" ",$category_limit);
        $category = $input_split[0];
        $limit = $input_split[1];

        if(in_array("$category",$array)){
              $rec = 0;
            while($rec < $limit){
                  echo $rec+1 . "  " . $category . "\n";
                  $rec++;
            }
        }

        else{
              echo "No Data Found";
        }
      

};
ApiFetch($response);
echo "\n Enter Category and limit \n";

$input_steam =fopen("php://stdin","r");
$user_input = fgets($input_steam);
UserInput($response,$user_input);

?>