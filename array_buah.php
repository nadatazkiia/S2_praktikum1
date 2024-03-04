<?php
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];

echo $ar_buah[2];
echo '</br>Jumlah buah : '. count($ar_buah);

echo '<ol>';
foreach ($ar_buah as $buah) {
    echo '<li>' . $buah . '</li>';
}

echo '</ol>';

$ar_buah[] = 'Durian';
array_push($ar_buah, 'Melon', 'Sirsak'); //menambahkan item melon di akhir array
print_r($ar_buah); //mencetak info array secara detail
echo '</br>';

unset($ar_buah[1]); //menghapus item dengan index 1 (mangga) dalam array
print_r($ar_buah);
echo '</br>';

$ar_buah[2] = 'Manggis'; //menambahkam item manggis dalam array di index 2
print_r($ar_buah);

echo '<ul>';
foreach ($ar_buah as $k => $v){
    echo "<li>Buah index - $k adalah $v";
}
echo '</ul>';

?>