<?php

    require_once "connect.php";

    $jsondata=file_get_contents("php://input");
    $data=json_decode($jsondata,true);
    
    $uname= ($data['uname']);
    $pass= ($data['pass']);
    $mob= ($data['mob']);
    $email= ($data['email']);

    $query = "INSERT INTO `app`(`uname`,`pass`,`mob`,`email`) VALUE ('$uname','$pass','$mob','$email')";

    $result = mysqli_query($conn,$query);

    if($result==1){

        $status=1;
        $message = 'Data Insert Successful' ;


    }else{

        $status=0;
        $message = 'Something Went Wrong' ;

    }

    $arr=[

        'message' =>$message,
        'status' =>$status

    ];

    echo json_encode($arr,JSON_PRETTY_PRINT);
    

?>