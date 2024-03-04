<?php
$ar_buah = ['p' => 'Pepaya', 'a' => 'Apel', 'm' => 'Mangga', 'j' => 'Jambu'];
echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';


echo 'asort($ar_buah)';
asort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';


echo 'ksort($ar_buah)';
ksort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';


echo 'arsort($ar_buah)';
arsort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';


echo 'krsort($ar_buah)';
krsort($ar_buah);
echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';


$ar_buah2 = ['Pepaya', 'Apel', 'Mangga', 'Jambu'];

echo 'sort($ar_buah2)';
sort($ar_buah2);

echo '<ol>';
foreach ($ar_buah2 as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';


echo 'rsort($ar_buah2)';
rsort($ar_buah2);
echo '<ol>';
foreach ($ar_buah2 as $k => $v) {
    echo "<li>$k - $v";
}
echo '</ol>';

?>