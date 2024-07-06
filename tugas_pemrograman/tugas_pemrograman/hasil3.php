<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            border: 3px solid teal;
            padding: 20px;
            width: 300px;
        }
        h1 {
            text-align: center;
            color: teal;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid teal;
            padding: 8px;
            text-align: left;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .input-button {
            padding: 10px 20px;
            background-color: teal;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo $_POST['nama']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $_POST['alamat']; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $_POST['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td><?php echo isset($_POST['pekerjaan_lain']) && $_POST['pekerjaan_lain'] != '' ? $_POST['pekerjaan_lain'] : $_POST['pekerjaan']; ?></td>
            </tr>
            <tr>
                <th>Hobi</th>
                <td><?php echo implode(", ", $_POST['hobi']); ?></td>
            </tr>
        </table>
        <div class="button-container">
            <button onclick="window.location.href='login1.php'" class="input-button">INPUT DATA LAGI</button>
        </div>
    </div>
</body>
</html>
