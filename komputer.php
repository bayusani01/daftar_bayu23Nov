<?php
include("koneksi.php");
?>
<form action="komputer.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
    <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<br>Hasil pencarian : ".$cari."</br>";
}
?>
    
</form>
<html>
<head>
    <style>
 body{
    background-image:url('mio.jpg');
    background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
 }       
        
    </style>
</head>
<body>
    <center>
<?php
session_start();
if($_SESSION['status']!="LOGIN"){
    header("location:../index.php?pesan=belum_login");
}
?>
<h0>Selamat datang,<?php echo $_SESSION['username']; ?>! ANDA TELAH LOGIN.</h0>
    <h1>Data Komputer</h1>
    <h4> <a href=tambah.php>Tambah</a></h4>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>No seri</th>
            <th>Merek</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
</thead>

<?php
   include("koneksi.php");
   if(isset($_GET['cari'])){
       $cari = $_GET['cari'];
       $sql="SELECT * FROM tb_komputer  WHERE merek LIKE '%".$cari."%'";
       $query = mysqli_query($db, $sql); 

   }else{
       $sql='SELECT * FROM tb_komputer';
       $query = mysqli_query($db, $sql);
   }

   while($komputer=mysqli_fetch_array($query)){
    echo "<tr>";
               echo "<td>".$komputer['id']."</td>";
               echo "<td>".$komputer['no_seri']."</td>";
               echo "<td>".$komputer['merek']."</td>";
               echo "<td>".$komputer['jumlah']."</td>";
               echo "<td>";
               echo "<a href='edit.php?id=".$komputer['id']."'>Edit</a> |";
               echo "<a href='hapus.php?id=".$komputer['id']."'>hapus</a>";
               echo "</td>";
    echo "</tr>";
   }
?>
</table>
<h4> <a href="logout.php">logout</a></h4>
</center>
</body>
</html>