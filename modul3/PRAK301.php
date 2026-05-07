<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 301</title>
    <style>
        .merah {
            color: red;
            font-weight: bold;
            font-size: 24px;
        }
        .hijau {
            color: green;
            font-weight: bold;
            font-size: 24px;
        }
    </style>
</head>
<body>

    <form method="POST">
        Jumlah Peserta : <input type="number" name="jumlah" value="<?= isset($_POST['jumlah']) ? $_POST['jumlah'] : '' ?>">
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {
            if ($i % 2 != 0) {
                echo "<p class='merah'>Peserta ke-$i</p>";
            } else {
                echo "<p class='hijau'>Peserta ke-$i</p>";
            }
            $i++;
        }
    }
    ?>

</body>
</html>