<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        .data-dosen {
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo "<div class='data-dosen'>";
    echo "<span class='label'>Nama:</span> {$Dosen['nama']} <br>";
    echo "<span class='label'>Domisili:</span> {$Dosen['domisili']} <br>";
    echo "<span class='label'>Jenis Kelamin:</span> {$Dosen['jenis_kelamin']} <br>";
    echo "</div>";
    ?>
</body>
</html>