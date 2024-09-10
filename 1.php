<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun</title>
</head>
<body>
    <?php
    $kalimat = "Selamat ulang tahun yang ke 17/18";
    cekKarakter($kalimat);
    function cekKarakter($kalimat){
        $karakter_spesial = ['!', '*', '$', '?', '/', '-'];
        $karakter_ada = [];
        foreach($karakter_spesial as $simbol){
            if (strpos($kalimat, $simbol) !== false){
                $karakter_ada[]= $simbol;
            } 
        }
        if(!empty($karakter_ada)){
            echo "<strong>Teks: $kalimat</strong><br>";
            echo "Karakter yang terdapat pada kalimat: " . implode(',', $karakter_ada);
        } else {
            echo "<strong>$kalimat</strong><br>";
            echo "Tidak terdapat simbol pada kalimat";
        }
    }
    ?>
</body>
</html>
