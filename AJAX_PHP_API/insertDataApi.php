<?php  

include 'connection.inc.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
//  header('Content-Type: application/json');
//  header('Access-Control-Allow-Origin: *');
//  header('Access-Control-Allow-Method: POST');
//  header('Access-Control-Allow-Headers: Access-Control-Allow-headers,Content-Type,Access-Control-Allow-Method,Authorization, X-Request-with');
  $data = json_decode(file_get_contents('php://input', true));
  $name = $data->name;
  $mobile = $data->mobile;
  $email = $data->email; 
  $city = $data->city;

 
  $res = array();
    $sql = "INSERT INTO `add_user`(`name`, `mobile`, `email`,`city`) VALUES ('{$name}','{$mobile}','{$email}','{$city}')";  

  if($mysql = $conn->query($sql) === TRUE){
 
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