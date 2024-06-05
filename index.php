<?php
include 'proses.php'; //menyambung file proses.php
$proses = new Beli(); 
$proses->setHarga(15420, 16130, 18310, 16510);

if (isset($_POST['kirim'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->hargaBeli();
    $proses->cetakPembelian();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
<form action="" method="POST">
<center>
    <table>
        <tr> 
            <td>Masukan Jumlah Liter</td>
            <td>:</td>
            <td><input type="number" name="liter" id="liter" required></td>
        </tr>
        <tr>
            <td>Pilih Bahan Bakar</td>
            <td>:</td>
            <td>
                <select name="jenis" id="jenis" required>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell V-Power</option>
                <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                <option value="SVPowerNitro">Shell V-Power Nitro</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><button name="kirim" type="submit">Beli</button></td>
        </tr>    
    </table>
</center>
</form>
</body>
</html>