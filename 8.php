<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];

    $data_jurusan = array_unique(array_map('strtoupper', $jurusan));

    print_r($data_jurusan);

    ?>
</body>

</html>