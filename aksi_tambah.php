<?php
include "koneksi.php";

$email        = $_POST['email'];
$password     = $_POST['password'];
$sql = "INSERT INTO login(email, password)
        VALUES ('$email', '$password')";
$result = $konek->query($sql);

if($result){
    header("location:index.php");
} else {
    echo "Password Salah";
}
?>