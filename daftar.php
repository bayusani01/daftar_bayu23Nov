<html>
<head>
    <style>
body{
    background-image:url('anim.jpg');
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
    <form action="index.php" method="POST">
        <fieldset>
            <p>
                <label for="username">Username :</label>
                <input type="text" name="username" />
            </p>

            <p>
                <label for="password">Password :</label>
              <input type="text" name="password" />
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="text" name="email" />
            </p>
            <p>
                <label for="no_telpon">No Telpon :</label>
                <input type="number" name="no_telpon" />
            </p>
            <p>
                <label for="tanggal_lahir">Tanggal lahir :</label>
                <input type="date" name="tanggal_lahir" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
            
        </fieldset>
</form>
</center>
</body>
</html>