<!DOCTYPE html>
<html>
<head>
    <title>kamu nanye?</title>
    <style>
body
{
    background-image:url('sam.jpg');
    background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
}
form
{
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 40px;
    box-sizing: border-box;
    z-index: 1;
}
form h2
{
    margin: 0;
    padding: 0;
    color: black;
    font-size: 24px;
}
form .inputbox
{
    width: 100%;
    margin-top: 20px;
}
form .inputbox input
{
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 2px black;
    outline: none;
    font-size: 18px;
    color: white;
    padding: 5px 0;
    font-family: consolas;
}
form p
{
    color: #eee;
}
form p a
{
    color: #fff;
}
.action-btn{
    display: inline-block;
    text-decoration: none;
    color: white;
    font-weight: 700;
    background: liner-gradient(90deg,#a701c8,#55e7fc);
    padding: 0.5em 2em;
    border-radius: 60px;
    margin: 1em o;
    transition: 0.3s;
}
    </style>
</head>
<body>
    <center>
    <br>
    <!-- cek pesan notifikasi -->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == " belum logout"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    </br>
</br>
<img src="log.jpg">
<form method="POST" action= "cek_login.php">
<fieldset>
    <div class="container">
        <div class="form">
        <h2 class="text-center">Latihan Login XII Rpl 2</h2>
    <table>
        <tr>
           <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="masukan username" ></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="masukan password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="LOGIN">
    <a href="daftar.php"><input type="button"  name="daftar"   value="Daftar">
</tr>
    </table>
</div>
</div>
</fieldset>
</form>
</center>
</body>
</html>