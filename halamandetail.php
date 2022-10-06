<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail - 120140101</title>
<style>
* {
    font-family: Arial, Helvetica, sans-serif;
}
form {
    background-color: rgb(255, 196, 0);
}
.order_card {
    background-color: rgb(255, 196, 0);
    margin: 0 auto;
    width: 800px;
    height:max-content;
    margin-top: 275px;
    padding: 20px;
    border-radius: 10px;
}
input {
    border-radius: 20px;
    margin: 30px;
    padding: 20px;
}
.title {
    text-align: center;
}
.card{
    margin-top: 20px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.image_card img {
    border-radius: 10px;
    width : 450px;
    height : 500px
}
.description_card h3 {
    margin: 10px 5px;
}
    </style>
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