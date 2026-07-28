<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>for</title>
</head>
<body>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>Data Mahasiswa ke-$i</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>