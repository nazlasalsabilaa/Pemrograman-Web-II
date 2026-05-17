<?php
$mahasiswa = [
    [
        "no" => 1,
        "nama" => "Ridho",
        "matkul" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2,
        "nama" => "Ratna",
        "matkul" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    [
        "no" => 3,
        "nama" => "Tono",
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Sistem Jaringan", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];

foreach ($mahasiswa as &$m) {
    $m['total_sks'] = array_sum(array_column($m['matkul'], 'sks'));
    $m['keterangan'] = ($m['total_sks'] < 7) ? "Revisi KRS" : "Tidak Revisi";
}
unset($m);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK403</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px 10px;
            text-align: left;
        }
        th {
            background-color: #cccccc;
        }
        .revisi {
            background-color: #f53535;
        }
        .tidak-revisi {
            background-color: #00b050;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah Diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>
    <?php foreach ($mahasiswa as $m): ?>
        <?php foreach ($m['matkul'] as $index => $mk): ?>
        <tr>
            <td>
                <?= ($index === 0) ? htmlspecialchars($m['no']) : '&nbsp;' ?>
            </td>
            <td>
                <?= ($index === 0) ? htmlspecialchars($m['nama']) : '&nbsp;' ?>
            </td>
            <td>
                <?= htmlspecialchars($mk['nama_mk']) ?>
            </td>
            <td>
                <?= htmlspecialchars($mk['sks']) ?>
            </td>
            <td>
                <?= ($index === 0) ? htmlspecialchars($m['total_sks']) : '&nbsp;' ?>
            </td>
            <td class="<?= ($index === 0) ? (($m['total_sks'] < 7) ? 'revisi' : 'tidak-revisi') : '' ?>">
                <?= ($index === 0) ? htmlspecialchars($m['keterangan']) : '&nbsp;' ?>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

</body>
</html>