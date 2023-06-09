<?php

    require_once "connect.php";

    if(isset($_POST['updtde'])){

         $jsondata = file_get_contents("php://input");
         $data = json_decode($jsondata,true);

         $uname = ($data['uname']);
         $pass = ($data['pass']);

         $query = "UPDATE `app` SET `uname`='$uname',`pass`='$pass'" ;
         $result = mysqli_query($conn,$query);

         if($result==1){

            echo  " UPdate Is Success" ;

         }else{

            $status=0;
        $message = 'Something Went Wrong' ;

    }

}

    $arr=[

        'message' =>$message,
        'status' =>$status

    ];


    echo json_encode($arr,JSON_PRETTY_PRINT);

?>