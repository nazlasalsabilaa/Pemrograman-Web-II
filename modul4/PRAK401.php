<?php
$panjang = "";
$lebar = "";
$nilai_str = "";
$error = "";
$matriks = [];

if (isset($_POST['cetak'])) {
    $panjang = isset($_POST['panjang']) ? (int)$_POST['panjang'] : 0;
    $lebar = isset($_POST['lebar']) ? (int)$_POST['lebar'] : 0;
    $nilai_str = isset($_POST['nilai']) ? trim($_POST['nilai']) : "";
    
    if (!empty($nilai_str)) {
        $arr_nilai = preg_split('/\s+/', $nilai_str);
        
        if (count($arr_nilai) == ($panjang * $lebar)) {
            $index = 0;
            for ($i = 0; $i < $panjang; $i++) {
                for ($j = 0; $j < $lebar; $j++) {
                    $matriks[$i][$j] = $arr_nilai[$index++];
                }
            }
        } else {
            $error = "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK401</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 15px;
        }
        td {
            border: 1px solid black;
            padding: 10px 10px;
            text-align: center;
            min-width: 10px;
        }
    </style>
</head>
<body>

<form action="" method="post">
    Panjang : <input type="text" name="panjang" value="<?php echo htmlspecialchars($panjang); ?>"><br>
    Lebar : <input type="text" name="lebar" value="<?php echo htmlspecialchars($lebar); ?>"><br>
    Nilai : <input type="text" name="nilai" value="<?php echo htmlspecialchars($nilai_str); ?>"><br>
    <input type="submit" name="cetak" value="Cetak">
</form>

<?php
if (!empty($error)) {
    echo "<p>" . htmlspecialchars($error) . "</p>";
} elseif (!empty($matriks)) {
    echo "<table>";
    for ($i = 0; $i < $panjang; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $lebar; $j++) {
            echo "<td>" . htmlspecialchars($matriks[$i][$j]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>