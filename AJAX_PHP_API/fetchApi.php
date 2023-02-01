<?php  

include 'connection.inc.php';
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: POST");
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Method: GET');
 header('Access-Control-Allow-Headers: Access-Control-Allow-headers,Content-Type,Access-Control-Allow-Method,Authorization, X-Request-with');
 

 
  
    $sql = "SELECT * FROM `add_user`";

    $result = $conn->query($sql);
  $arr = array();
if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
     $arr = $row;
  }

 
} else {
  echo "0 results";
}
  
  
//     if($mysql = $conn->query($sql) === TRUE){
 
//     $res = [
//         'status' => 200,
//         'message' => 'Emp Created Successfully'
//     ];
//     echo json_encode($res);



//   }else{

//     $res = [
//         'status' => 201,
//         'message' => 'Emp not Created'
//     ];
//     echo json_encode($res);


//   }
  