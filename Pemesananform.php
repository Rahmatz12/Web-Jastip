<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Form</title>
    <link rel="stylesheet" href="Pemesanan Css.css">
</head>

<body>
    <div class="container">

        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ea enim beatae ab quae quia? Velit, quae! Veniam, aliquam corporis!</p>
                    <br>
                    <p>Bantu doanya agar saya kuat sampai tamat</p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <form action="controler.php" name="pesan" method="POST">
                        <h2 class="lg-view">Form Pemesanan</h2>
                        <h2 class="sm-view">Form Pemesanan</h2>
                        <!-- <input type="text" placeholder="Nama" name="nama_user">
                        <input type="email" placeholder="Alamat Email" name="email"> -->
                        <select name="jasa" id="jasa">
                            <option value="3">editor</option>
                            <option value="1">videografer</option>
                            <option value="2">fotografer</option>
                        </select>
                        <div>
                            <?php $tanggal_reservasi = date('Y-m-d');
                                echo "<input type='hidden' name='tanggal_reservasi' id='tanggal_reservasi' value='$tanggal_reservasi' required>"; ?>
                        </div>
                        <button type="submit">Kirim</button>
                        <a href="NABE Editor.php">Home</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>