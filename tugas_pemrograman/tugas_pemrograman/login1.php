<html>
    <head>
        <title>Pengelolaan Data Mahasiswa</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 40px;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px #ccc;
            }
            h1 {
                color: green;
            }
            form {
                background-color: white;
                padding: 20px;
                border-radius: 5px;
            }
            label {
                margin-right: 10px;
            }
            input[type="text"], select, input[type="submit"], input[type="reset"] {
                margin-bottom: 10px;
            }
            input[type="submit"], input[type="reset"] {
                cursor: pointer;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
            }
            input[type="reset"] {
                background-color: #f44336;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
            }
        </style>
    </head>
    <body>
        <h1>Pengelolaan Data Mahasiswa</h1>
        <form action="hasil2.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama"><br>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat"><br>
            <label>Jenis Kelamin:</label>
            <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki">
            <label for="laki-laki">Laki - Laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br>
            <label for="pekerjaan">Pekerjaan:</label>
            <select id="pekerjaan" name="pekerjaan" onchange="if (this.value=='Lainnya') {this.style.display='none'; document.getElementById('pekerjaan_lain').style.display='block';}">
                <option value="Pelajar">Pelajar</option>
                <option value="Pekerja">Pekerja</option>
                <option value="Lainnya">Lainnya</option>
            </select>
            <input type="text" id="pekerjaan_lain" name="pekerjaan_lain" style="display:none;" placeholder="Masukkan pekerjaan lainnya">
            </select><br>
            <label>Hobi:</label>
            <input type="checkbox" id="olahraga" name="hobi[]" value="Olahraga">
            <label for="olahraga">Olahraga</label>
            <input type="checkbox" id="musik" name="hobi[]" value="Musik">
            <label for="musik">Musik</label>
            <input type="checkbox" id="jalan-jalan" name="hobi[]" value="Jalan-Jalan">
            <label for="jalan-jalan">Jalan-Jalan</label><br>
            <input type="submit" value="Kirim">
            <input type="reset" value="Batal">
        </form>
    </body>
</html>
