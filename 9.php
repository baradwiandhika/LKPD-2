<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $uang = 1750;
    $coin = carikoin($uang);
    
    function carikoin($uang)
    {
        $coin = array(500, 200);
        $result = array();

        foreach ($coin as $koin) {
            while ($uang >= $koin) {
                $result[] = $koin;
                $uang -= $koin;
            }
        }

        $result = array_unique($result);
        return $result;
    }

    echo "Jenis Koin untuk Uang Rp. $uang: <br>";
    foreach ($coin as $koin) {
        echo "Rp.$koin <br>";
    }
    ?>
</body>

</html>
