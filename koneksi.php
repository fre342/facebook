<?php 
//deklarasi variabel
$namaserver = "localhost";
$username = "root";
$password = "";
$namadb = "dbfacebook";

//hubungkan ke database server
$konek = new mysqli($namaserver, $username, $password, $namadb);

//cek sambungan koneksi
if($konek->connect_error){
    die("Koneksi gagal : ".$konek->connect_error);
}
?>