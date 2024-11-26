<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow border-0" style="width: 350px; border-radius: 15px;">
            <div class="card-body p-4">
                <h1 class="text-center text-primary mb-4" style="font-size: 1.8rem; font-weight: 600;">Login</h1>
                <form action="./backend/login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold text-muted">Email</label>
                        <input type="email" id="email" name="email" class="form-control rounded-pill shadow-sm" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold text-muted">Password</label>
                        <input type="password" id="password" name="password" class="form-control rounded-pill shadow-sm" placeholder="Masukkan password Anda" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100 py-2 rounded-pill shadow-sm">Login</button>
                </form>
                <div class="text-center mt-3">
                    <small class="text-muted">Belum punya akun? <a href="register.php" class="text-primary text-decoration-none">Daftar di sini</a></small>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
