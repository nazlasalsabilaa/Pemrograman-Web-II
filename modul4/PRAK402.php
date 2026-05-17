<?php
$mahasiswa = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
];

foreach ($mahasiswa as &$m) {
    $m['akhir'] = (0.4 * $m['uts']) + (0.6 * $m['uas']);
    
    if ($m['akhir'] >= 80) $m['huruf'] = 'A';
    elseif ($m['akhir'] >= 70) $m['huruf'] = 'B';
    elseif ($m['akhir'] >= 60) $m['huruf'] = 'C';
    elseif ($m['akhir'] >= 50) $m['huruf'] = 'D';
    else $m['huruf'] = 'E';
}
unset($m);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK402</title>
    <style>
        table {
            border-collapse: collapse;
            background-color: #ffffff;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #cccccc;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
    </tr>
    <?php foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= htmlspecialchars($m['nama']) ?></td>
        <td><?= htmlspecialchars($m['nim']) ?></td>
        <td><?= htmlspecialchars($m['uts']) ?></td>
        <td><?= htmlspecialchars($m['uas']) ?></td>
        <td><?= htmlspecialchars($m['akhir']) ?></td>
        <td><?= htmlspecialchars($m['huruf']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>