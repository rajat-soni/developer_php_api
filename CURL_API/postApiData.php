<?php 
include 'connection.inc.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST"); // header files //

$response = json_decode(file_get_contents("php://input",true));
$name =  $response->name;
$mobile =  $response->mobile;
$email=  $response->email;

  $res = array();
  $sql = "INSERT INTO `add_user` (`name`, `mobile`, `email`) VALUES ('$name','$mobile','$email')";  // insert query //

    if($runSql = $conn->query($sql) === TRUE){ // fire query //
     
        $res = [
            'status' => 200,
            'message' => 'Emp Created Successfully'
        ];
        echo json_encode($res);


    }else{

        $res = [
            'status' => 201,
            'message' => 'Emp not Created'
        ];
        echo json_encode($res);
    }

?>