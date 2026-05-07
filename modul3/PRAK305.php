<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 305</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="kata" required>
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['kata'];
        $panjang = strlen($kata);
        $split = str_split($kata);

        echo "<h3>Input:</h3>";
        echo "<p>$kata</p>";
        echo "<h3>Output:</h3>";

        foreach ($split as $huruf) {
            echo strtoupper($huruf);
            
            $i = 1;
            while ($i < $panjang) {
                echo strtolower($huruf);
                $i++;
            }
        }
    }
    ?>

</body>
</html>