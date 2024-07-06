<html>
<head>
    <title>Hasil Inputan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .label {
            color: #4A5568; /* Gray-700 */
            font-weight: bold;
        }
        .value {
            background-color: #E2E8F0; /* Gray-200 */
            color: #2D3748; /* Gray-800 */
            padding: 8px;
            border-radius: 5px;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg p-8 bg-white rounded-lg shadow-lg">
        <h1 class="text-center text-2xl font-bold mb-6">Data Pengguna</h1>
        <div class="mb-4">
            <label class="label">Nama:</label>
            <p class="value"><?php echo htmlspecialchars($_POST['nama']); ?></p>
        </div>
        <div class="mb-4">
            <label class="label">Alamat:</label>
            <p class="value"><?php echo htmlspecialchars($_POST['alamat']); ?></p>
        </div>
        <div class="mb-4">
            <label class="label">Tempat Lahir:</label>
            <p class="value"><?php echo htmlspecialchars($_POST['tempat_lahir']); ?></p>
        </div>
        <div class="mb-4">
            <label class="label">Tanggal Lahir:</label>
            <p class="value"><?php echo htmlspecialchars($_POST['tanggal_lahir']); ?></p>
        </div>
        <div class="mb-4">
            <label class="label">Jenis Kelamin:</label>
            <p class="value"><?php echo htmlspecialchars($_POST['jenis_kelamin']); ?></p>
        </div>
        <div class="mb-4">
            <label class="label">Pendidikan:</label>
            <p class="value"><?php echo htmlspecialchars($_POST['pendidikan']); ?></p>
        </div>
    </div>
</body>
</html>
