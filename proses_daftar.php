<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $username=$_POST['username'];
    $Password=$_POST['password'];
    $Email=$_POST['email'];
    $No_telp=$_POST['no_telpon'];
    $Tanggal_lahir=$_POST['tanggal_lahir']

    $sql="INSERT INTO tb_login(username,password , email, no_telpon, tanggal_lahir) VALUES ('$username','$Password', '$Email', '$No_telp', '$Tanggal_lahir')";
    $query=mysqli_query($db, $sql);

    if($query){
        header('location:komputer.php?status:sukses');
    }else{
        header('location:komputer.php?status:gagal'); 
    }
}
?>