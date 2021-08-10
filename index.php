<?php
    $connection = mysqli_connect('localhost','Dinuka','abcd1234','ShineWay');

    if(!$connection){
        echo mysqli_connect_error();
    }else{
        echo 'done';
    }
?>