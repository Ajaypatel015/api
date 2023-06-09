<?php

    $host= "localhost";
    $database_name="id20798530_api";
    $database_usname="id20798530_321";
    $database_pass="Ajay@#$123456";

    $conn=mysqli_connect($host,$database_usname,$database_pass,$database_name);

    if($conn){

        echo "connection success" ;

    }else{

        echo "connection not working..." ;

    }

?>