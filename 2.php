<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pembayaran = 120000;
    $hari = date('l');
    $diskon_hari = 0.05;
    $diskon_harga = 0.07;
    $totalBayar;

    if ($hari == "Tuesday" && $pembayaran > 100000) {
        $totalBayar = $pembayaran - ($pembayaran * ($diskon_hari + $diskon_harga));
    } elseif ($hari == "Tuesday") {
        $totalBayar = $pembayaran - ($pembayaran * $diskon_hari);
    } elseif ($pembayaran > 100000) {
        $totalBayar = $pembayaran - ($pembayaran * $diskon_harga);
    } else {
        $totalBayar = $pembayaran;
    }

    echo "Hari Ini Hari: " . $hari;
    echo "<br>";
    echo "Total Pembelanjaan: Rp." . number_format($pembayaran, 2, ',', '.');
    echo "<br>";
    echo "Total yang harus dibayar: Rp." . number_format($totalBayar, 0, '', '.');
    ?>
</body>

</html>