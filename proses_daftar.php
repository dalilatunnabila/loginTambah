<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $nama_lengkap=$_POST['nama_lengkap'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $no_telpon=$_POST['no_telpon'];
    $umur=$_POST['umur'];
    

    $sql="INSERT INTO latihan_loginbila (nama_lengkap,username,password,no_telpon,umur) VALUES ('$nama_lengkap','$username','$password','$no_telpon','$umur')";
    $query=mysqli_query($koneksi,$sql);

if($query){
    header('location:login.php?status=sukses');
}else{
    header('location:login.php?status=gagal');
}
}
?>