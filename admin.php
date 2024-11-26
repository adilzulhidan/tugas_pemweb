<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Profil Perusahaan Ticketing Transportasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="asset/style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <a href="login.php"></a>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TicketPro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Bagian Header -->
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>Selamat Datang di TicketPro</h1>
            <p>Solusi satu atap untuk pemesanan tiket transportasi Anda.</p>
          </div>
          <div class="col-md-6">
            <img src="asset/Gambar/Ticketing.jpg" alt="Gambar Ticketing" class="img-fluid" />
          </div>
        </div>
      </div>
    </header>

    <!-- Bagian Layanan -->
    <section id="services" class="services py-5">
      <div class="container">
        <h2 class="text-center">Layanan Kami</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card text-center">
              <img src="asset/Gambar/Ticketing_Bus.jpg" class="card-img-top" alt="Tiket Bus" />
              <div class="card-body">
                <h5 class="card-title">Tiket Bus</h5>
                <p class="card-text">Dapatkan tiket bus untuk berbagai tujuan dengan harga terbaik.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <img src="asset/Gambar/Ticketing_Kereta2.jpg" class="card-img-top" alt="Tiket Kereta" />
              <div class="card-body">
                <h5 class="card-title">Tiket Kereta</h5>
                <p class="card-text">Pesan tiket kereta dengan mudah dan nyaman di TicketPro.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <img src="asset/Gambar/Ticketing_Pesawat2.jpg" class="card-img-top" alt="Tiket Pesawat" />
              <div class="card-body">
                <h5 class="card-title">Tiket Pesawat</h5>
                <p class="card-text">Kami menawarkan harga bersaing untuk penerbangan domestik dan internasional.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bagian Tentang Kami -->
    <section id="about" class="about py-5 bg-light">
      <div class="container">
        <h2 class="text-center">Tentang Kami</h2>
        <p class="text-center">TicketPro adalah penyedia layanan tiket transportasi terkemuka. Misi kami adalah mempermudah perjalanan dengan menyediakan berbagai pilihan tiket bus, kereta, dan pesawat. Kami juga menawarkan berbagai penawaran spesial dan kemudahan pembayaran untuk memastikan pengalaman perjalanan Anda lebih menyenangkan dan terjangkau.</p>

        <h3 class="text-center mt-4">Visi dan Misi</h3>
        <p class="text-center">Visi kami adalah menjadi platform terbaik untuk pemesanan tiket transportasi di Asia Tenggara. Misi kami adalah memberikan pelayanan yang cepat, aman, dan nyaman bagi semua pelanggan.</p>
      </div>
    </section>

    <!-- Bagian Kontak -->
    <section id="contact" class="contact py-5">
      <div class="container">
        <h2 class="text-center">Hubungi Kami</h2>
        <div class="row">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
          <div class="col-md-6">
            <h5>Kantor Kami</h5>
            <p>Jalan-jalan No. 123, Karawang, Indonesia</p>
            <p>Email: info@ticketpro.com</p>
            <p>Telepon: +62********</p>

            <h5>Ikuti Kami</h5>
            <a href="#" class="text-primary">Facebook</a> | <a href="#" class="text-primary">Instagram</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
      <p>&copy; 2024 TicketPro. Semua Hak Cipta Dilindungi.</p>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
          });
        });
      });
    </script>
  </body>
</html>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Selamat Datang, Admin!!!!</h1>

    <a href="login.php">Logout</a>
</body>
</html> -->