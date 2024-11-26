<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/profile.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0" style="border-radius: 15px;">
                    <div class="card-body text-center p-4">
                        <img src="https://via.placeholder.com/120" alt="Admin Profile" class="rounded-circle mb-3 shadow" width="120" height="120">
                        <h1 class="text-primary" style="font-size: 1.8rem; font-weight: 600;">Selamat Datang, Admin</h1>
                        <p class="text-muted mb-4">Kelola semua data dan aktivitas di sistem Anda dengan mudah.</p>
                        <div class="d-flex justify-content-center">
                            <a href="dashboard.php" class="btn btn-primary mx-2 rounded-pill shadow-sm">Dashboard</a>
                            <a href="settings.php" class="btn btn-outline-secondary mx-2 rounded-pill shadow-sm">Pengaturan</a>
                            <a href="logout.php" class="btn btn-danger mx-2 rounded-pill shadow-sm">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
