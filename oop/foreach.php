<?php
$mahasiswa = [
    ['nama' => "William", 'prodi' => "Sistem Informasi"],
    ['nama' => "Jane",    'prodi' => "Sistem Informasi"],
    ['nama' => "Jack",    'prodi' => "Sistem Informasi"],
    ['nama' => "Bill",    'prodi' => "Sistem Informasi"]
];

for($i = 0; $i <= 3; $i++){
    echo $mahasiswa[$i]['nama'] . " - " . $mahasiswa[$i]['prodi'];
    echo "<br>";
}
?>