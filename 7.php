<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function hitungKarakter($text)
    {
        $panjangKalimat = strlen($text);

        if ($panjangKalimat > 50) {
            $text = substr($text, 0, 50) . "............";
        }

        return $text;
    }

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugit fuga libero consectetur, molestias voluptatibus excepturi dolorem, hic facere illo deleniti modi voluptates dolorum tempora nesciunt quas esse itaque suscipit?";
    $hasil = hitungKarakter($text);
    echo $hasil;
    ?>
</body>

</html>