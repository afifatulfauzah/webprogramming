<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai</title>
</head>
<body>

<table border="1">
    <tr>
        <td>
            <?php 
            if ($mhs['tahun'] >= 2025) {
                echo "Baru";
            } else {
                echo "Senior";
            }
            ?>
        </td>
        
        <td><?= $mhs['nilai'] ?></td>
        
        <td>
            <?php
            if ($mhs['nilai'] >= 90) {
                echo "A";
            } elseif ($mhs['nilai'] >= 80) {
                echo "B";
            } elseif ($mhs['nilai'] >= 70) {
                echo "C";
            } elseif ($mhs['nilai'] >= 60) {
                echo "D";
            } else {
                echo "E";
            }
            ?>
        </td>
    </tr>
</table>

</body>
</html>