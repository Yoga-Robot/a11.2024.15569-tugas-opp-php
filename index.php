<?php
include "Mahasiswa.php"; 

echo "<h3>Data Mahasiswa:</h3>";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
$mahasiswaTI->tampilkanData();

// Latihan 1: Membuat 2 objek baru 

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
$mahasiswaSI->tampilkanData();

$mahasiswaBaru = new Mahasiswa();
$mahasiswaBaru->setData('A11.2024.15569', 'Nalendra Yogatama', 'Teknik Informatika');
$mahasiswaBaru->tampilkanData();

echo "<h4>Output print_r (Array):</h4>";
echo "<pre>";
print_r($mahasiswaTI->getData());
echo "</pre>";
?>