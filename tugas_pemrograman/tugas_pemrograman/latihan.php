<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yusuf</title>
</head>
<body>
    
    <?php
        $jumlah=5;
        $harga=20000;
        $total= $jumlah * $harga;

        echo "Jumlah Beli : $jumlah <br>";
        echo "Harga Barang : $harga <br>";
        echo "Total Bayar : $total <br>";
    ?>

    <table border=1>
    <tr>
        <td>Jumlah Beli</td>
        <td>Harga Barang</td>
        <td>Total Bayar</td>
    </tr>
   

    <tr>
        <td><?php echo"$jumlah"?></td>
        <td><?php echo"$harga"?></td>
        <td><?php echo"$total"?></td>
    </tr>

    </table>

</body>
</html>