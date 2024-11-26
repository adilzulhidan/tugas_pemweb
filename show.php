<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/show.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Data Produk</h1>
        <div class="card shadow border-0" style="border-radius: 15px;">
            <div class="card-body">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Gambar Produk</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require './config/db.php';

                            $products = mysqli_query($db_connect, "SELECT * FROM products");
                            $no = 1;

                            while ($row = mysqli_fetch_assoc($products)) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['name']; ?></td>
                            <td>Rp<?= number_format($row['price'], 0, ',', '.'); ?></td>
                            <td>
                                <a href="<?= $row['image']; ?>" target="_blank" class="btn btn-link p-0 text-decoration-none text-primary">
                                    Unduh
                                </a>
                            </td>
                            <td>
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning rounded-pill shadow-sm">Edit</a>
                                <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger rounded-pill shadow-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
