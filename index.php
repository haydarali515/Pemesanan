<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php
    $cabang = $namaPelanggan = $nomorHP = $jumlahKotak = "";
    $tagihanAwal = $diskon = $tagihanAkhir = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cabang = $_POST["branch"];
        $namaPelanggan = $_POST["name"];
        $nomorHP = $_POST["phonenumber"];
        $jumlahKotak = $_POST["quantity"];

        $tagihanAwal = 50000 * $jumlahKotak; // tagihan awal
        $diskon = 0.1 * $tagihanAwal; // diskon
        $tagihanAkhir = $tagihanAwal - $diskon; // tagihan akhir
    }
    ?>

    <div class="container">
        <h1>PEMESANAN NASI</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="branch" class="form-label">Cabang:</label>
                <select class="form-select" name="branch" id="branch">
                    <option value="cabang A">Cabang A</option>
                    <option value="cabang B">Cabang B</option>
                    <option value="cabang C">Cabang C</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Pelanggan:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="phonenumber" class="form-label">No HP:</label>
                <input type="text" class="form-control" name="phonenumber" id="phonenumber">
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah Kotak:</label>
                <input type="text" class="form-control" name="quantity" id="quantity">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Pesan</button>
        </form>

        <div class="result mt-3">
            <h2>Detail Pemesanan:</h2>
            <p><strong>Cabang:</strong> <?php echo $cabang; ?></p>
            <p><strong>Pelanggan:</strong> <?php echo $namaPelanggan; ?></p>
            <p><strong>No HP:</strong> <?php echo $nomorHP; ?></p>
            <p><strong>Jumlah Kotak:</strong> <?php echo $jumlahKotak; ?></p>
            <p><strong>Tagihan Awal:</strong> <?php echo $tagihanAwal; ?></p>
            <p><strong>Diskon:</strong> <?php echo $diskon; ?></p>
            <p><strong>Tagihan Akhir:</strong> <?php echo $tagihanAkhir; ?></p>
        </div>
    </div>
</body>
</html>
