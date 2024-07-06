<html>
    <head>
        <title>Masukan Data</title>
    </head>
    <body>
<center>
        <h1>Form Edit Data Mahasiswa</h1>
        <form action="hasil.php" method="post">
        <pre>
            NIM          : <input type="text" name="nim">
            Nama         : <input type="text" name="nama">
            Alamat       : <textarea name="alamat" rows="5" cols="40"></textarea>
            Jenis Kelamin: <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki  <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            Agama   : <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="buddha">Buddha</option>
                <option value="katolik">Katolik</option>
                <option value="hindu">Hindu</option>
                <option value="konghucu">Konghucu</option>
                </select>
            Sekolah Asal  : <input type="text" name="sekolah_asal">
            <input type="submit" value="Simpan"><input type="reset" value="Batal">
        </pre>
        </form>
<center>
    </body>
</html>