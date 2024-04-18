<?php
require_once 'contact.php';

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

Contact::setKoneksi($conn);

$idToUpdate = 1; 
$new_no_telepon = '082355441526';
$new_nama = 'Lili Permatasari'; 

$resUpdate = Contact::update($idToUpdate, $new_no_telepon, $new_nama);
echo $resUpdate;

mysqli_close($conn);

?>