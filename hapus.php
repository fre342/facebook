<?php 
include "koneksi.php";

$password = $_GET['password'];

$sql = "DELETE FROM login WHERE password=$password";

if($konek->query($sql) === TRUE){
    header("location:login.php");
} else {
    echo "Gagal Menghapus Data";
}
?>