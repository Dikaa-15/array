<?php


$abjad = ["a", "b", "c", "d", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$mapel = ["Pendidikan Agama dan Budi Pekerti", "Pendidikan pancasila", "Bahasa Indonesia","Matematika", "Bahasa inggris", "Dasar-dasar rpl"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            background-color: red;
            color: white;
            width: 90px;
            height: 90px;
            text-align: center;
            line-height: 90px;
            border-radius: 50%;
            float: left;
            margin: 5px;

        }

        .clear{
            clear: both;
        }

        .kotak2{
            background-color: orange;
            color: white;
            height: 150px;
            width: 200px;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            float: left;
            margin: 5px;
            text-align: center;
            line-height: 150px;

        }
    </style>
</head>
<body>
    <h1>Abjad A-Z</h1>
    <?php for($i = 0; $i < count($abjad); $i++) : ?>
    <div class="kotak"><?= $abjad[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <h1>Mata pelajaran-X RPL</h1>
    <?php foreach ($mapel as $y):?>
        <div class="kotak2"><?= $y; ?></div>
        <?php endforeach;  ?>
</body>
</html>