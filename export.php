<?php

require("./model/db.php");

$query = "SELECT titlu,popularitate FROM retete ORDER BY popularitate DESC LIMIT 10;";
$result =  mysqli_query($conn, $query);
if (!$result) {
    exit(mysqli_error($con));
}

$retete = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $retete[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=clasament_retete.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Titlu', 'Popularitate'));

if (count($retete) > 0) {
    foreach ($retete as $row) {
        fputcsv($output, $row);
    }
}
?>