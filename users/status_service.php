<?php
$trackNumber = $_GET['track_number'];

// Membaca data dari file JSON
$jsonData = file_get_contents('data-service.json');
$data = json_decode($jsonData, true);

$serviceStatus = $data['serviceStatus'];

$statusFound = false;
foreach ($serviceStatus as $status) {
    if ($status['track_number'] === $trackNumber) {
        echo "Track number: " . $status['track_number'] . "<br>";
        echo "Nama: " . $status['nama'] . "<br>";
        echo "Perangkat: " . $status['perangkat'] . "<br>";
        echo "Status: " . $status['status'] . "<br>";
        $statusFound = true;
        break;
    }
}

if (!$statusFound) {
    echo "Track number $trackNumber tidak ditemukan";
}
?>
