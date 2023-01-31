<?php 
include 'connection.inc.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");



$response = json_decode(file_get_contents('php://input'));

$name = $response['name'];
$mobile= $response['mobile'];
$email = $response['email'];


     $sql = "INSERT INTO `add_user` (`fname`, `fmobile`, `femail`) VALUES ('$name','$mobile','$email')"; 
    $runSql = $conn->query($sql);
     if($runSql){
       
            echo 'success';

        }else{

        echo "failed";
    }



?>