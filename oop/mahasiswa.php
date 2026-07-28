<?php

class Mahasiswa{
    private $nama;
    private $tempat_lahir;
    private $tanggal_lahir;

    public function setNama($nama)
    {
        $this->nama = $nama;
       
    }

    public function getNama(){
        return $this->nama;
    }

public function setTempatLahir($tempat_Lahir){
    $this->tempat_Lahir = $tempat_Lahir;
}
public function getTempatLahir(){
    return $this->tempat_Lahir;
}

public function setTanggalLahir($tanggal_Lahir){
    $this->tanggal_Lahir = $tanggal_Lahir;
}

public function getTanggalLahir(){
    return $this->tanggal_Lahir;
}
}

class MahasiswaSI extends Mahasiswa{
    private $prodi = "Sistem Informasi";
    function __construct($nama,$tempat_Lahir,$tanggal_Lahir){
        $this->setNama($nama);
        $this->setTempatLahir($tempat_Lahir);
        $this->setTanggalLahir($tanggal_Lahir);
        
    }
}

$fauzah = new MahasiswaSI("Fauzah", "dharmasraya", "27-01-2005");
echo $fauzah->getProdi()."<br>";
