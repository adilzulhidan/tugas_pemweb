<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/creat.css">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow border-0" style="width: 400px; border-radius: 15px;">
            <div class="card-body p-4">
                <h1 class="text-center text-primary mb-4" style="font-size: 1.8rem; font-weight: 600;">Tambah Produk</h1>
                <a href="show.php" class="btn btn-link text-decoration-none mb-4 p-0">👀 Lihat Data Produk</a>
                <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold text-muted">Nama Produk</label>
                        <input type="text" id="name" name="name" class="form-control rounded-pill shadow-sm" placeholder="Masukkan nama produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label fw-semibold text-muted">Harga Produk</label>
                        <input type="number" id="price" name="price" class="form-control rounded-pill shadow-sm" placeholder="Masukkan harga produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-semibold text-muted">Gambar Produk</label>
                        <input type="file" id="image" name="image" class="form-control rounded-pill shadow-sm" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100 py-2 rounded-pill shadow-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
