<html>
<head>
    <style>
body{
    background-image:url('Nama.jpg');
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
    <h1>Aplikasi Pendataan PC Lab RPL</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="no_seri">No seri :</label>
                <input type="number" name="no_seri" />
            </p>

            <p>
                <label for="merek">Merek :</label>
              <label><input type="radio" name="merek" value="asus" />asus</label>
              <label><input type="radio" name="merek" value="lenovo" />lenovo</label>
              <label><input type="radio" name="merek" value="hp" />hp</label>
              <label><input type="radio" name="merek" value="acer" />acer</label>
            </p>
            <p>
                <label for="jumlah">Jumlah :</label>
                <input type="number" name="jumlah" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
            
        <h4> <a href="komputer.php">back</a></h4>
        </fieldset>
</form>
</center>
</body>
</html>