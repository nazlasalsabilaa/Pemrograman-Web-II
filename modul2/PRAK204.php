<!DOCTYPE html>
<html>
<body>

    <form method="post">
        Nilai : <input type="number" name="nilai" value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>" required><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];

        echo "<h2>Hasil: ";
        
        if ($nilai == 0) {
            echo "Nol";
        } elseif ($nilai >= 1 && $nilai <= 9) {
            echo "Satuan";
        } elseif ($nilai >= 11 && $nilai <= 19) {
            echo "Belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai <= 99)) {
            echo "Puluhan";
        } elseif ($nilai >= 100 && $nilai <= 999) {
            echo "Ratusan";
        } elseif ($nilai >= 1000) {
            echo "Anda Menginput Melebihi Limit Bilangan";
        }

        echo "</h2>";
    }
    ?>

</body>
</html>