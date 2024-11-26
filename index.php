<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link CSS Kustom -->
    <link rel="stylesheet" href="./assets/login.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg p-4 login-card" style="width: 100%; max-width: 400px;">
            <h1 class="text-center mb-4">Login</h1>
            <form action="./backend/login.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="register.php" class="text-primary">Daftar sekarang</a></p>
            </div>
        </div>
    </div>
    <!-- Script JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
