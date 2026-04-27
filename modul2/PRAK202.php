<!DOCTYPE html>
<html>
<head>
    <style>
        .error { color: #FF0000; }
    </style>
</head>
<body>

<?php
$namaErr = $nimErr = $genderErr = "";
$nama = $nim = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $namaErr = "nama tidak boleh kosong";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["nim"])) {
        $nimErr = "nim tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["gender"])) {
        $genderErr = "jenis kelamin tidak boleh kosong";
    } else {
        $gender = $_POST["gender"];
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="nama" value="<?php echo $nama;?>">
    <span class="error">* <?php echo $namaErr;?></span><br>
    
    Nim: <input type="text" name="nim" value="<?php echo $nim;?>">
    <span class="error">* <?php echo $nimErr;?></span><br>
    
    Jenis Kelamin :<span class="error">* <?php echo $genderErr;?></span><br>
    <input type="radio" name="gender" value="Laki-Laki" <?php if (isset($gender) && $gender=="Laki-Laki") echo "checked";?>> Laki-Laki<br>
    <input type="radio" name="gender" value="Perempuan" <?php if (isset($gender) && $gender=="Perempuan") echo "checked";?>> Perempuan<br>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($nama != "" && $nim != "" && $gender != "") {
        echo "<h2>Output:</h2>";
        echo $nama . "<br>";
        echo $nim . "<br>";
        echo $gender . "<br>";
    }
}
?>

</body>
</html>