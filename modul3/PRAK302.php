<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 302</title>
    <style>
        img {
            width: 20px;
            height: 20px;
        }
        .blank {
            width: 20px;
            height: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <form method="POST">
        Tinggi : <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"><br>
        Alamat Gambar : <input type="text" name="url" value="<?= isset($_POST['url']) ? $_POST['url'] : '' ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <br>

    <?php
    if (isset($_POST['cetak']) && !empty($_POST['url'])) {
        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];
        $i = 1; 

        while ($i <= $tinggi) {
            $j = 1;
            while ($j < $i) {
                echo '<div class="blank"></div>';
                $j++;
            }

            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$url'>";
                $k--;
            }

            echo "<br>";
            $i++;
        }
    }
    ?>

</body>
</html>