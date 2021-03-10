<?php

    $jsondata=file_get_contents("contents.json");
    $json=json_decode($jsondata,true);
    foreach($json['content'] as $content => $val){
        echo $content . "\n";
        foreach($json['content'][$content] as $item){
            foreach($item as $key => $value) {
                echo "\n ".$value . "<br>";
                
               
                
            }
            
            echo "<br>";
            echo "<br>";
            echo "<br>";
        }
    }


    
    
?>


<html>
    <head>
        <title>
            Softwares
        </title>
    </head>

    <body style="background-color:powderblue;">
    </body>  
</html>
