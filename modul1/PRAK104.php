<?php
$hp = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone</title>
    <style>
        .box {
            width: 265px;
            border: 2px solid black;
            font-family: Georgia, serif;
            font-variant-numeric: lining-nums;
            padding: 0px;
        }

        .title {
            text-align: center;
            font-weight: bold;
            padding: 6px;
            border: 2px solid black;
            margin: 4px;
        }

        .item {
            border: 2px solid black;
            margin: 4px;
            padding: 6px;
            font-weight: normal;
        }
    </style>
</head>
<body>

<div class="box">

    <div class="title">Daftar Smartphone Samsung</div>

    <?php
    for ($i = 0; $i < count($hp); $i++) {
        echo "<div class='item'>{$hp[$i]}</div>";
    }
    ?>

</div>

</body>
</html>