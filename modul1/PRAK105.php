<?php
$hp = [
    "hp1" => "Samsung Galaxy S22",
    "hp2" => "Samsung Galaxy S22+",
    "hp3" => "Samsung Galaxy A03",
    "hp4" => "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone</title>
    <style>
        .box {
            width: 310px;
            border: 1.5px solid black;
            font-family: Georgia, serif;
            font-variant-numeric: lining-nums;
            padding: 0;
        }

        .title {
            text-align: center;
            font-weight: bold;
            padding: 20px 0;
            border: 1.5px solid black;
            margin: 2px;
            background-color: red;
            font-size: 20px;
        }

        .item {
            border: 1.5px solid black;
            margin: 2px;
            padding: 3px;
            background-color: #fffcfc;
            font-size: 15px;
        }
    </style>
</head>
<body>

<div class="box">
    <div class="title">Daftar Smartphone Samsung</div>

    <?php
    foreach ($hp as $key => $data) {
        echo "<div class='item'>$key : $data</div>";
    }
    ?>
</div>

</body>
</html>