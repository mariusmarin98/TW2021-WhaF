<?php
include_once 'db.php';
include_once '../jwt/src/jwt_params.php';
include_once '../jwt/src/JWT.php';
include_once '../jwt/src/ExpiredException.php';
include_once '../jwt/src/BeforeValidException.php';
include_once '../jwt/src/SignatureInvalidException.php';

use \FireBase\JWT\JWT;

function test_input( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $email_login  = test_input( $_POST['email_login'] );

    $parola_login = test_input( $_POST['parola_login'] );

    if ( filter_var( $email_login, FILTER_VALIDATE_EMAIL ) ) {
        //FUNCTIA ACEASTA VERIFICA DACA EMAILUL INTRODUS ESTE VALID
        if ( strlen( $parola_login )>7 ) {
            if ( preg_match( '/[A-Z]/', $parola_login ) ) {
                //PAROLA TREBUIE SA CONTINA CEL PUTIN O LITERA MARE
                $stmt = $conn->prepare( 'SELECT * FROM `utilizatori` WHERE `email` = ?' );
                $stmt->bind_param( 's', $email_login );
                $stmt->execute();
                $result = $stmt->get_result();

                // $email = $conn->real_escape_string( $email_login );

                // $select = mysqli_query( $conn, "SELECT * FROM `utilizatori` WHERE `email` = '$email'" ) or exit( mysqli_error( $conn ) );
                // if ( mysqli_num_rows( $select ) ) {
                $nr_rows = $result->num_rows;
                if ( $nr_rows > 0 ) {
                    // $rows = mysqli_fetch_assoc( $select );
                    $rows = $result->fetch_assoc();
                    if ( password_verify( $parola_login, $rows['parola'] ) ) {
                        session_start();
                        $_SESSION['prenume'] = $rows['prenume'];
                        $prenume = $rows['prenume'];
                        $token = array(
                            'iss'=>JWT_ISS,
                            'aud'=> JWT_AUD,
                            'iat'=> JWT_IAT,
                            'exp'=> JWT_EXP,
                            'data'=> array(
                                'prenume'=>$rows['prenume'],
                                'email'=>$row['email']
                                // 'admin'=>$rows['admin']
                            )
                        );
                        $jwt = JWT::encode( $token, JWT_KEY );
                        setcookie( 'JWT', $jwt, time() + ( 24 * 60 * 60 ), '/' );
                        header( 'Location: ../index.php?m=homepage&prenume='.$_SESSION['prenume'].'' );
                    } else {
                        $err_login = 'Parola este incorecta!';
                        header( 'Location: login.php?err='.$err_login.'' );
                    }
                } else {
                    $err_login = 'Email neasociat niciunui cont!';
                    header( 'Location: login.php?err='.$err_login.'' );

                }

            } else {
                $err_login = 'Parola trebuie sa contina cel putin o litera mare!';
                header( 'Location: login.php?err='.$err_login.'' );
            }
        } else {
            $err_login = 'Parola trebuie sa aiba minim 8 caractere!';
            header( 'Location: login.php?err='.$err_login.'' );
        }
    } else {
        $err_login = 'Emailul introdus nu este valid!';
        header( 'Location: login.php?err='.$err_login.'' );
    }
}

require '../views/login.php';
?>