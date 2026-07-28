<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?php
    $mahasiswa=[
    ['nama'=>"fauzah",'prodi'=>"sistem informasi",'tahun_masuk'=>2023],
    ['nama'=>"siti",'prodi'=>"manajemen",'tahun_masuk'=>2025],
    ['nama'=>"fatimah",'prodi'=>"sistem informasi",'tahun_masuk'=>2022],
    ['nama'=>"udin",'prodi'=>"sistem informasi",'tahun_masuk'=>2026],
    ['nama'=>"fauzah ",'prodi'=>"sistem informasi",'tahun_masuk'=>2023],
    ['nama'=>"siti",'prodi'=>"manajemen",'tahun_masuk'=>2025],
    ['nama'=>"fatimah",'prodi'=>"sistem informasi",'tahun_masuk'=>2022],
    ];
    ?>
    <table border="1">
        <tr>
            <td>NO</td>
            <td>Nama</td>
            <td>Prodi</td>
            <td>tahun</td>
            <td>kategori</td>
        </tr>
        <?php
        $i = 1;
        foreach ($mahasiswa as $mhs) { ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?= $mhs ['nama'] ?> </td>
                <td> <?= $mhs ['prodi'] ?> </td>
                <td> <?= $mhs ['tahun_masuk'] ?></td>
                <td>
                    <?php
                    if($mhs['tahun_masuk']=='2025'){
                        echo "Baru";
                    }else{
                        echo "Senior";
                    }
                    ?>
                </td>
            </tr>
        <?php $i++;
        }
        ?>
    </table>
</body>

</html>