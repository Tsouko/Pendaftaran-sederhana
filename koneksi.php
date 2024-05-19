<?php
$koneksi = new mysqli('localhost', 'root', '', 'uh_ddg_php');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>