<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function cek_jawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar)
    {
        $benar = count(array_intersect($jawaban_pelajar, $jawaban_benar));
        $salah = count(array_diff($jawaban_pelajar, $jawaban_benar));

        echo "Nama : $nama_pelajar <br>";
        echo "Jumlah Jawaban Benar : $benar <br>";
        echo "Jumlah Jawaban Salah : $salah";
    }

    $jawaban_benar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
    $nama_pelajar = 'Putra';
    $jawaban_pelajar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'V'];

    cek_jawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar);
    ?>
</body>

</html>