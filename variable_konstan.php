<?php
define('PHI',3.14);
const DBNAME = 'invetori';
const DBSERVER = 'localhost';

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo "Luas Lingkaran dengan Jari-Jari $jari : $luas";
echo "<br/>Kelilingnya : $kll";

echo '<br>Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER; 
?>

