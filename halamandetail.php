<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Detail - 120140101</title>
</head>
<body>
    <?php
    if (isset($_GET['submit'])) {
        $nBeli = $_GET['nama'];
        $nAntrian = $_GET['antrian'];
        $level = $_GET['level'];
        $jumlah = $_GET['jumlah'];
        $minuman = $_GET['minuman'];
        $harga = $_GET['harga'];
    }
    ?>
    <div class="order_card">
        <h1 class="title">ORDER CARD MIE PADIAH</h1>
        <div class="card">
            <div class="image_card">
                <img src="logo.jpeg" alt="card" width="130" height="180">
            </div>
            <div class="description_card">
                <h2>Nama </h2>
                <small><?php echo $nBeli ?></small>
                <h2>No. Antrian</h2>
                <small><?php echo $nAntrian ?></small>
                <h2>Pilihan Level </h3>
                <small><?php echo $level ?></small>
                <h2>Jumlah </h2>
                <small><?php echo $jumlah ?></small>
                <h2>Pilihan Minuman </h2>
                <small><?php echo $minuman ?></small>
                <h2>Total Harga </h2>
                <small><?php echo $harga ?></small></p>
            </div>
        </div>
    </div>

</body>

</html>