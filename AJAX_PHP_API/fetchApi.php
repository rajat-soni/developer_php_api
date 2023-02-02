<?php  

include 'connection.inc.php';
 header('Content-Type: application/json'); 
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Method: GET');
 header('Access-Control-Allow-Headers: Access-Control-Allow-headers,Content-Type,Access-Control-Allow-Method,Authorization, X-Request-with');
 

 
  
$sql = "SELECT * FROM `add_user`"; // select query //

$result = $conn->query($sql);
$arr = array();
    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            $arr[]= $row;
        }
    echo json_encode($arr);
    
    } else {

    $arr = [
        "status" => 201,
        "message" => "Data not fetched",
    ];
    }
    
  
