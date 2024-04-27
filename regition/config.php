<?php
    $host = "localhost";
    $user = "root";
    $parol = "";
    $db_name = "phone_project";
    $link = mysqli_connect($host, $user, $parol, $db_name);
    if(!$link){
        echo "MB ulanmadi";
        exit("Stop!");
    }
    
    // else{
    //     echo "MB ulandi";
    // }
    // print_r($link);
?>