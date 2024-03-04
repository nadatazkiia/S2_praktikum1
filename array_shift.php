<?php
$team = ['Nada', 'Nana', 'Rissa', 'Renti'];

array_shift($team); //menghapus item pertama dalam array
foreach ($team as $person) {
    echo $person . '</br>';
}
?>