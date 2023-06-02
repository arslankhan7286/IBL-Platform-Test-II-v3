<?php
   /*
   Plugin Name: POST REST API
   Description: Wordpress REST API
   Version: 1.0
   Author: IBL Platform
   */

$greetingpost = get_page_by_title('greeting', OBJECT, 'post');

if($greetingpost == ""){
    $username = 'admin';
    $password = 'admin@123';
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost:8000/wp-json/wp/v2/posts',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "title": "greeting",
    "content": "greeting",
    "status" : "publish"
    }',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Basic ' . base64_encode($username . ':' . $password),
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }

}
?>