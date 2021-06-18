<?php

include_once 'db.php';

function test_input( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $titlu       = test_input( $_POST['titlu'] );
    $ingrediente = test_input( $_POST['ingrediente'] );
    $preparare   = test_input( $_POST['preparare'] );
    $dificultate = test_input( $_POST['dificultate'] );
    $durata      = test_input( $_POST['durata'] );

    if ( $dificultate == 'usor' || $dificultate == 'mediu' || $dificultate = 'dificil' ) {
        if ( is_numeric( $durata ) && $durata >= 10 && $durata <= 180 ) {

            //ADAUGA POZA

            $target = '../images/'.basename( $_FILES['poza']['name'] );

            $image = $_FILES['poza']['name'];

            if ( move_uploaded_file( $_FILES['poza']['tmp_name'], $target ) ) {

                $sql = "INSERT INTO retete (titlu, ingrediente, pasi_preparare, dificultate, durata, nume_poza) VALUES (?, ?, ?, ?, ?, ?);";

                $stmt = $conn->prepare( $sql );
                $stmt->bind_param( 'ssssss', $titlu, $ingrediente, $preparare, $dificultate, $durata, $image );
                // mysqli_query( $conn, $sql );
                $stmt->execute();
                $result = $stmt->get_result();

                $add = 'Reteta a fost adaugata!';
                header( 'Location: ../index.php?m=homepage&add='.$add.'' );
            } else {
                $err_reteta = 'Probleme cu incarcarea imaginii!';
                header( 'Location: retete.php?err='.$err_reteta.'' );
            }
        } else {
            $err_reteta = 'Introduceti o durata valida!';
            header( 'Location: retete.php?err='.$err_reteta.'' );
        }
    } else {
        $err_reteta = 'Introduceti un grad de dicultate valid!';
        header( 'Location: retete.php?err='.$err_reteta.'' );
    }

}
require '../views/retete.php';
?>