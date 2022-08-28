@extends('layouts.main')

@section('container')
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Selamat Datang di <span>Primastrans</span></h2>
          <p data-aos="fade-up">Melayani dengan sepenuh hati</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#profile" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
  </div>

  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-1.jpg') }})"></div>
    <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-2.jpg') }})"></div>
    <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-3.jpg') }})"></div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Profile Section ======= -->
  <section id="profile" class="alt-services">
    <div class="container" data-aos="fade-up">    
      <div class="section-header">
        <h2>Tentang Kami</h2>
      </div>    
        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 img-bg" style="background-image: url({{ asset('img/daily-inspection.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>
          <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h3>PT Primastrans Tri Mandiri</h3>
              <p>PT Primastrans Tri Mandiri merupakan perusahaan yang bergerak dibidang angkutan darat yang berbasis di Kota Tasikmalaya dan beroperasi di wilayah Jawa Barat. Kami menyediakan layanan angkutan darat.</p>
              <p>Kami melayani berbagai macam angkutan jalur darat mulai dari pengiriman produk, batubara dan lainnya menggunakan truk box/wingbox dan truk dump.</p>
              {{-- <p>PT Primastrans Tri Mandiri didirikan berdasarkan akta tanggal 2 Februari 2016 No. 52 yang dibuat dihadapan Heri Hendriyana, S.H., M.H, Notaris di Kota Tasikmalaya. Akta pendirian tersebut telah mendapat pengesahan dari Menteri Hukum dan Hak Asasi Manusia Republik Indonesia melalui Surat Keputusan tanggal 9 Februari 2016 Nomor AHU-0007246.AH.01.01.Tahun 2016</p> --}}
              
          </div>
        </div>

    </div>
  </section><!-- End Alt Services Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Layanan</h2>
        <p>PT Primastrans Tri Mandiri berbasis di Kota Tasikmalaya dan beroperasi di wilayah Jawa Barat. Kami menyediakan layanan pengiriman berdasarkan barang yang akan diangkut.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <a href="/services">
              <div class="icon">
                <i class="dump dump-dump-truck"></i>
              </div>
              <h3>Dump Truck</h3>
            </a>
            <p>Layanan angkutan barang berupa pasir, batu split, batubara menggunakan Dump Truck</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <a href="/services">
              <div class="icon">
                <i class="fa-solid fa-truck"></i>
              </div>
              <h3>Box/Wingbox Truck</h3>
            </a>
            <p>Layanan angkutan barang berupa produk menggunakan Box/Wingbox Truck</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Alt Services Section ======= -->
  <section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/alt-services.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Kenapa Kami?</h3>
          <p>Kami PT Primastrans Tri Mandiri menawarkan layanan angkutan darat yang memiliki keunggulan dalam banyak hal</p>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-person-circle flex-shrink-0"></i>
            <div>
              <h4><a href="#" class="stretched-link" onClick="return false;">Tenaga Profesional</a></h4>
              <p>Kami memiliki tenaga profesional dalam bidangnya yang bekerja sesuai keahliannya</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-calendar-date flex-shrink-0"></i>
            <div>
              <h4><a href="#" class="stretched-link" onClick="return false;">Pengiriman Tepat Waktu</a></h4>
              <p>Pengiriman barang sesuai dengan aman dan waktu yang telah ditentukan</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4><a href="#" class="stretched-link" onClick="return false;">Pelayanan Memuaskan</a></h4>
              <p>Kami memberikan pelayanan baik secara langsung, email, atau telepon</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-piggy-bank flex-shrink-0"></i>
            <div>
              <h4><a href="#" class="stretched-link" onClick="return false;">Harga Ekonomis</a></h4>
              <p>Kami menawarkan pelayanan ideal dengan harga yang memuaskan</p>
            </div>
          </div><!-- End Icon Box -->
        
        </div>
      </div>

    </div>
  </section><!-- End Alt Services Section -->

<!-- ======= Mitra Section ======= -->
<section id="mitra" class="constructions section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Mitra Kami</h2>
      <p>Kepuasan kami adalah kepercayaan anda terhadap layanan kami</p>
    </div>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-12 col-md-12 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.ibaralioho.co.id/" target="_blank"><img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt=""></a>
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

  </div>
</section><!-- End Mitra Section -->

</main><!-- End #main -->
@endsection
