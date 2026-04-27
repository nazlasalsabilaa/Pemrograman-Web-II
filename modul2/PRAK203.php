<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

    <form method="post">
        Nilai : <input type="number" name="nilai" step="any" value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>" required><br>
        Dari : <br>
        <input type="radio" name="dari" value="Celcius" <?php if (isset($_POST['dari']) && $_POST['dari'] == "Celcius") echo "checked"; ?> required> Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit" <?php if (isset($_POST['dari']) && $_POST['dari'] == "Fahrenheit") echo "checked"; ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur" <?php if (isset($_POST['dari']) && $_POST['dari'] == "Rheamur") echo "checked"; ?>> Rheamur<br>
        <input type="radio" name="dari" value="Kelvin" <?php if (isset($_POST['dari']) && $_POST['dari'] == "Kelvin") echo "checked"; ?>> Kelvin<br>
        
        Ke : <br>
        <input type="radio" name="ke" value="Celcius" <?php if (isset($_POST['ke']) && $_POST['ke'] == "Celcius") echo "checked"; ?> required> Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" <?php if (isset($_POST['ke']) && $_POST['ke'] == "Fahrenheit") echo "checked"; ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur" <?php if (isset($_POST['ke']) && $_POST['ke'] == "Rheamur") echo "checked"; ?>> Rheamur<br>
        <input type="radio" name="ke" value="Kelvin" <?php if (isset($_POST['ke']) && $_POST['ke'] == "Kelvin") echo "checked"; ?>> Kelvin<br>
        
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil = 0;
        $simbol = "";

        if ($dari == "Celcius") {
            $temp_c = $nilai;
        } elseif ($dari == "Fahrenheit") {
            $temp_c = ($nilai - 32) * 5/9;
        } elseif ($dari == "Rheamur") {
            $temp_c = $nilai * 5/4;
        } elseif ($dari == "Kelvin") {
            $temp_c = $nilai - 273.15;
        }

        if ($ke == "Celcius") {
            $hasil = $temp_c;
            $simbol = "°C";
        } elseif ($ke == "Fahrenheit") {
            $hasil = ($temp_c * 9/5) + 32;
            $simbol = "°F";
        } elseif ($ke == "Rheamur") {
            $hasil = $temp_c * 4/5;
            $simbol = "°Re";
        } elseif ($ke == "Kelvin") {
            $hasil = $temp_c + 273.15;
            $simbol = "°K";
        }

        echo "<h2>Hasil Konversi: " . number_format($hasil, 1) . " $simbol</h2>";
    }
    ?>

</body>
</html>