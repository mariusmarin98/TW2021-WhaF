<?php
include_once 'jwt_params.php';
include_once 'JWT.php';
include_once 'ExpiredException.php';
include_once 'BeforeValidException.php';
include_once 'SignatureInvalidException.php';
use \FireBase\JWT\JWT;
$data = $_POST['JWT'];
try {
    $decoded_jwt = JWT::decode( $data, JWT_KEY, array( 'HS256' ) );

} catch( Exception $e ) {

    http_response_code( 401 );
    echo json_encode( ['message'=>$e->getMessage()] );
    exit();
}
$utilizator = $decoded_jwt->data;
echo json_encode( ( array )$utilizator );
?>