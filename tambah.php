<html>
    <head>
</head>
<body>
    <h1>tambah</h3>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldseat>
                <h4><a href="logout.php">LOGOUT</a></h4>
                <p>
                    <label for="Nama_pemilik">Nama Pemilik:</label>
                    <input type="text" name="Nama_pemilik"/>
                </p>
                <p>
                    <label for="jenis_hewan">Jenis Hewan:</label>
                    <label><input type="radio" name="jenis_hewan" Value="kucing">Kucing</label>
                    <label><input type="radio" name="jenis_hewan" Value="anjing">Anjing</label>
                    <label><input type="radio" name="jenis_hewan" Value="ular">ular</label>
                </p>
                <p>
                    <label for="keluhan">Keluhan:</label>
                    <input type="text" name="keluhan"/>
                </p>
                <p>
                    <input type="submit" name="kirim_data" Value="kirim_data"/>
                </p>
</fieldseat>
</form>
</body>
</html>