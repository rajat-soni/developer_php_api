<?php 


if(($_POST)) {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $url = 'http://localhost:3000/postApiData.inc.php';

    $data  = json_encode(array(
        'name' => $name,
        'mobile' => $mobile,
        'email' => $email
    )) ;

   
    $curl = curl_init();

    // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    
    // return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    
    // curl_exec() executes the started curl session
    // $output contains the output string
    $result = curl_exec($curl);
    echo $result; 
    // close curl resource to free up system resources
    // (deletes the variable made by curl_init)
    curl_close($curl);
}



?>