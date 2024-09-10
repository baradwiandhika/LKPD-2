<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka = [90];
    $bagi = [1, 2, 3, 5, 6, 9, 10, 15, 18, 30 ];
    foreach ($bagi as $b2) {
        foreach($angka as $a1) {
            $hasil = $a1/$b2;
            echo "$a1 : $b2 : $hasil";
        }
        echo"<br>";
    }
    ?>
</body>
</html>