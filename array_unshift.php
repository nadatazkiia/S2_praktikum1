<?php
$team = ['Nada', 'Nana', 'Rissa', 'Renti'];

array_unshift($team, 'Fatiya', 'Dinda');
foreach ($team as $person) {
    echo $person . '</br>';
}

?>