<?php
class Koneksi{
  private $server="localhost";
  private $username="id5720757_dev1";
  private $password = "kusnanik30";
  private $db = "id5720757_mahasiswa";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
