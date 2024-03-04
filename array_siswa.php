<?php
$ns1 = ['id1' => '1', 'nim' => '0110123', 'uts' => 84, 'tugas' => 78, 'uas' => 90];
$ns2 = ['id2' => '2', 'nim' => '0110345', 'uts' => 85, 'tugas' => 90, 'uas' => 97];
$ns3 = ['id3' => '3', 'nim' => '0110678', 'uts' => 82, 'tugas' => 80, 'uas' => 95];
$ns4 = ['id4' => '4', 'nim' => '0110912', 'uts' => 93, 'tugas' => 100, 'uas' => 98];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<h3 align="center">Daftar Nilai Siswa</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr> 
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns) {
            echo "<tr>";
            echo "<td>$nomor</td>";
            echo '<td>' . $ns['nim'] . '</td>'; 
            echo '<td>' . $ns['uts'] . '</td>'; 
            echo '<td>' . $ns['uas'] . '</td>';
            echo '<td>' . $ns['tugas'] . '</td>';
            $nilai_akhir =  ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>'; 
            echo "</tr>";
            $nomor++;
        }
        ?>
    </tbody>
</table>
