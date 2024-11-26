<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link CSS Kustom -->
    <link rel="stylesheet" href="./assets/register.css">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg p-4 register-card" style="width: 100%; max-width: 500px;">
            <h1 class="text-center mb-4">Register</h1>
            <form action="./backend/register.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda" required>
                </div>
                <div class="mb-3">
                    <label for="confirm" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="confirm" id="confirm" class="form-control" placeholder="Masukkan konfirmasi password Anda" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="index.php" class="text-primary">Login sekarang</a></p>
            </div>
        </div>
    </div>
    <!-- Script JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
