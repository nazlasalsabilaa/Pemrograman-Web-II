<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 304</title>
    <style>
        img {
            width: 70px;
            height: 70px;
            filter: brightness(1.2) saturate(1.1);
        }
        button {
            margin: 0; 
            padding: 1px 7px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <?php
    $jumlah = 0;

    if (isset($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];
    }

    if (isset($_POST['tambah'])) {
        $jumlah++;
    }

    if (isset($_POST['kurang'])) {
        if ($jumlah > 0) {
            $jumlah--;
        }
    }

    if ($jumlah == 0): ?>
        <form method="POST">
            Jumlah bintang <input type="number" name="jumlah" required>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php else: ?>
        <p>Jumlah bintang <?= $jumlah ?></p>
        
        <?php
        $i = 0;
        while ($i < $jumlah) {
            echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png'>";
            $i++;
        }
        ?>

        <form method="POST">
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <button type="submit" name="tambah">Tambah</button><button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>

</body>
</html>