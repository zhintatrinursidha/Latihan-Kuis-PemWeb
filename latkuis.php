<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Kuis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel = "stylesheet" href = "stylelatkuis.css">

</head>
<body>
    <div class = "container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">SHOES.</span>
                <div class = "menu">
                    <h6>Home</h6>
                    <h6>Products</h6>
                    <h6>About</h6>
                </div>
            </div>
        </nav>
        <div class = "isi">
            <div class = "card shadow p-4" id = "productCard">
                <img id = "gambar" src="https://910.id/cdn/shop/files/19_bf07e484-f119-449d-9feb-b80c7311ecb7.png?v=1731613184" alt="Gambar Tidak Tersedia">
                <div class = "keterangan">
                    <h2 id = "kategori">RUNNING SHOES</h2>
                    <h1 id = "produk">Air Runner</h1>
                    <h3 id = "deskripsi">Sepatu ringan dan nyaman untuk digunakan saat berolahrga maupun aktivitas sehari-hari</h3>
                    <h1 id = "harga">Rp 899.000</h1>

                    <div class = "warna">
                        <h4>Pilih Warna: </h4>
                        <div class = "pilihanWarna">
                            <button type="button" id = "btnHitam" class="btn rounded-circle"></button>
                            <button type="button" id = "btnBiru" class="btn rounded-circle"></button>
                            <button type="button" id = "btnKrem" class="btn rounded-circle"></button>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-dark" type="button">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        let btnHitam = document.getElementById("btnHitam");
        let btnBiru = document.getElementById("btnBiru");
        let btnKrem = document.getElementById("btnKrem");
        let productCard = document.getElementById("productCard");

        btnHitam.addEventListener("click", function() {
            productCard.style.backgroundColor = "#DDDDDD";
        });

        btnBiru.addEventListener("click", function() {
            productCard.style.backgroundColor = "#CFE2FF";
        });

        btnKrem.addEventListener("click", function() {
            productCard.style.backgroundColor = "#F5E6CC";
        });
    </script>
    
</body>
</html>