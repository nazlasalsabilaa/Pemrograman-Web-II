<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 303</title>
    <style>
        img {
            width: 20px;
            vertical-align: 0px; 
            filter: brightness(1.3) saturate(1.2);
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <form method="POST">
        Batas Bawah : <input type="number" name="bawah" value="<?= isset($_POST['bawah']) ? $_POST['bawah'] : '' ?>"><br>
        Batas Atas : <input type="number" name="atas" value="<?= isset($_POST['atas']) ? $_POST['atas'] : '' ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];

        if ($bawah !== "" && $atas !== "") {
            if ($bawah >= 0 && $atas >= 0 && $bawah <= $atas) {
                $i = $bawah;
                do {
                    if (($i + 7) % 5 == 0) {
                        echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png'> ";
                    } else {
                        echo "$i ";
                    }
                    $i++;
                } while ($i <= $atas);
            } else {
                echo "<span class='error'>Nilai batas tidak bisa kurang dari 0!</span>";
            }
        }
    }
    ?>

</body>
</html>