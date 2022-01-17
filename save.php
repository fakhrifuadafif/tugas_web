<?php

$nama_siswa=$_POST['nama_siswa'];
$gender=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$hoby=$_POST['hoby'];
include_once("conection.php");
$result=mysqli_query($connect,"INSERT INTO tbl_siswa(nama_siswa,jenis_kelamin,alamat,hoby) VALUES ('$nama_siswa','$jenis_kelamin','$alamat','$hoby')"

if ($result)
{
    echo "<script>alert('Data Sucessfully');window.location.href='index.php';</script>";
}
?>