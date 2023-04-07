<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JokoPrasetio || Profil Perusahaan</title>

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <section id="hero">
    <div class="hero-container">
      <div class="hero-image" style="background-image: url('{{ $produkKami[2]->image }}'); background-size: cover; background-position: center center; height: 100vh;">
        <div class="hero-content d-flex flex-column justify-content-center align-items-center text-center">
          <h2 data-aos="fade-up" data-aos-delay="50" style="color: white; padding-top:200px">Welcome to <span>Jodev</span></h2>
          <p data-aos="fade-up" data-aos-delay="50" style="color: white;">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn btn-get-started btn-primary btn-danger" data-aos="fade-up" data-aos-delay="50" style="color: white;">Get Started</a>
        </div>
      </div>
    </div>
  </section>
  
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>JoDevCompany</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Visi dan Misi</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Produk Kami</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim Kami</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
          <div class="section-title">
            <h2 data-aos="fade-up" data-aos-delay="150" >Tentang Kami</h2>
          </div>
          <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150" >
              <img src="{{ $tentangKami->image }}" class="img-fluid" style="max-width: 100%; height: auto;" alt=""  data-aos="fade-up" data-aos-delay="150" >
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="250">
              <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="250">
                {!! $tentangKami->body !!}
              </p>
            </div>
          </div>
        </div>
      </section>

    <section id="services" class="services">
        <div class="container">
          <div class="section-title ">
            <h2 data-aos="fade-up" data-aos-delay="250">Visi Misi</h2>
            <h5 data-aos="fade-up" data-aos-delay="250">Visi</h5>
            @foreach ($visiMisi as $item)
              <p data-aos="fade-up" data-aos-delay="250" style="text-align: justify">{{ $item->visi }}</p>
            @endforeach
            <h5 data-aos="fade-up" data-aos-delay="250">Misi</h5>
            @foreach ($visiMisi as $item)
              <p data-aos="fade-up" data-aos-delay="250" style="text-align: justify">{{ $item->misi }}</p>
            @endforeach
          </div>
        </div>
      </section>
      <section id="portfolio" class="portfolio section-bg">
        <div class="container">
          <div class="section-title">
            <h2 data-aos="fade-up" data-aos-delay="250">Produk Kami</h2>
          </div>
          <div class="row portfolio-container">
            @foreach($produkKami as $produk)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="{{ $produk->image }}" data-aos="fade-up" data-aos-delay="250" class="img-fluid" style="object-fit: cover; height: 300px; width: 100%;" alt="">
                  <div class="portfolio-info">
                    <h4>{{ $produk->namaProduk }}</h4>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
            <h2 data-aos="fade-up" data-aos-delay="250"> Tim Kami</h2>
            <p data-aos="fade-up" data-aos-delay="250">Kita Bisa Kita Juara.</p>
          </div>
          <div class="row">
            @foreach($timKami as $kami)
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="member">
                <img src="{{ $kami->image }}" data-aos="fade-up" data-aos-delay="250" class="img-fluid" style="height: 300px;" alt="{{ $kami->nama }}">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>{{ $kami->nama }}</h4>
                    <span>{{ $kami->jabatan }}</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <section id="contact" class="contact section-bg">
        <div class="container d-flex justify-content-center">
          <div class="section-title">
            <h2 data-aos="fade-up" data-aos-delay="250">Kontak Kami</h2>
            <p data-aos="fade-up" data-aos-delay="250">Hubungi Kami.</p>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-6 d-flex align-items-stretch infos mx-auto">
              <div class="row">
                <div class="col-lg-6 info d-flex flex-column align-items-stretch" data-aos="fade-up" data-aos-delay="250">
                  <i class="bx bx-map"></i>
                  <h4 data-aos="fade-up" data-aos-delay="250">Alamat</h4>
                  <p data-aos="fade-up" data-aos-delay="250">{!! $kontakKami->alamat !!}</p>
                </div>
                <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch" data-aos="fade-up" data-aos-delay="250">
                  <i class="bx bx-envelope"></i>
                  <h4 data-aos="fade-up" data-aos-delay="250">Email</h4>
                  <p data-aos="fade-up" data-aos-delay="250">{{ $kontakKami->email }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Jodev</h3>
            <p>
              {!! $kontakKami->alamat !!}
              <br><br>
              <strong>Nama:</strong> {{ $kontakKami->nama }}<br>
              <strong>Email:</strong> {{ $kontakKami->email }}<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.linkedin.com/in/jokoprasetio12/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="credits">
            Designed by <a href="https://www.linkedin.com/in/jokoprasetio12/">JokoPrasetio</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>