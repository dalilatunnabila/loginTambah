<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $Nama_pemilik=$_POST['Nama_pemilik'];
    $jenis_hewan=$_POST['jenis_hewan'];
    $keluhan=$_POST['keluhan'];

    $sql="INSERT INTO tb_hewan(Nama_pemilik,jenis_hewan,keluhan) VALUES ('$Nama_pemilik','$jenis_hewan','$keluhan')";
    $query=mysqli_query($koneksi,$sql);

}else{
    ("akses dilarang");
}
?>