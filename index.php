<?php
    $start = $_POST['start'];
    $array_img =  explode(",", base64_decode( $_POST["arrayIMG"])) ;
    
 
     get (  $array_img[$start] ); 
     
    function get ($i){
     
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $i);
         curl_setopt ($ch, CURLOPT_REFERER, "https://remanga.org/");
         curl_setopt($ch, CURLOPT_NOBODY, false); 
         curl_setopt($ch, CURLOPT_HTTPHEADER,[
            
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36"
        ]);
      
        $picture = curl_exec($ch);
        echo $picture;
        curl_close($ch);


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    123
</body>
</html>
