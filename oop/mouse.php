<?php
class Mouse
{
  var  $warna;
  var $jumlah_tombol;
  var $jumlah_baterai;
function klik(){
    echo "Mouse diklik";
 }
function detail(){
  echo "Warna : " . $this->warna."<br>";
  echo "Jumlah baterai : " . $this->jumlah_baterai."<br>";
  echo "Jumlah tombol : " . $this->jumlah_tombol."<br>";
  echo "<br>";
}
function __construct($warna, $baterai, $tombol)
{

  $this->detail();;

} 
}

$mouse1 = new Mouse();
$mouse1->warna ='Merah';
$mouse1->jumlah_tombol = 3;
$mouse1->jumlah_baterai =2;

$mouse1->detail();

$mouse2 = new Mouse();
$mouse2->warna = 'Biru';
$mouse2->jumlah_baterai = 1;
$mouse2->jumlah_tombol = 3;
$mouse2->detail();