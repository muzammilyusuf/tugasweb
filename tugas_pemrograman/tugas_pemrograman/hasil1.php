<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $pendidikan = $_POST['pendidikan'];

        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<style>";
        echo "table, th, td {";
        echo "border: 1px solid black;";
        echo "}";
        echo "</style>";
        echo "</head>";
        echo "<body>";

        echo "<h2>Hasil Input</h2>";

        echo "<table style='width:30%'>";
        echo "<tr>";
        echo "<th>Nama</th>";
        echo "<td>" . $nama . "</td>";
        echo "<tr>";
        echo "<th>Alamat</th>";
        echo "<td>" . $alamat . "</td>";
        echo "<tr>";
        echo "<th>Tempat lahir</th>";
        echo "<td>" . $tempat_lahir . "</td>";
        echo "<tr>";
        echo "<th>Tanggal lahir</th>";
        echo "<td>" . $tanggal_lahir . "</td>";
        echo "<tr>";
        echo "<th>Jenis Kelamin</th>";
        echo "<td>" . $jenis_kelamin . "</td>";
        echo "<tr>";
        echo "<th>Pendidikan</th>";
        echo "<td>" . $pendidikan . "</td>";
        echo "<tr>";
        echo "</table>";
        echo "</body>";
        echo "</html>";

    }