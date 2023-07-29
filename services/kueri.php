<?php
  require 'koneksi.php';
  // PENDAFTARAN
  function fn_ambil_pendaftaran() {
    global $koneksi;
    return mysqli_query($koneksi,"SELECT * FROM pendaftaran");
  }
  
?>