<html>
    <head>
        <title>
            program gaji pegawai
        </title>
    </head>

    <body>

        <h2>
            PROGRAM GAJI PEGAWAI
        </h2>
        <h3>
            input data pegawai
        </h3>

        <form action="tugas7.1.php" method="POST">
            Nama:
            <input type="text" name="nama" value=""> 
            <br><br>

            Gaji:
            <input type="number" name="gaji" value=""> 
            <br><br>

            Lama Kerja:
            <input type="number" name="lamaKerja" value=""> 
            <br><br>

            Jenis:
            <select name="jenis">
                <option value="programmer">Programmer</option>
                <option value="direktur">Direktur</option>
                <option value="mingguan">Pegawai Mingguan</option>
            </select>
            <br><br>

            Harga Barang:
            <input type="number" name="hargaBarang" value=""> 
            <br><br>

            Stok:
            <input type="number" name="stok" value=""> 
            <br><br>

            Terjual:
            <input type="number" name="terjual" value=""> 
            <br><br>

            <input type="submit" value="kirim">
        </form>

    </body>
</html>