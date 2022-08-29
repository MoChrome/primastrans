@extends('layouts.main')

@section('container')
@include('partials/breadcrumbs')
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Layanan</h2>
        <p>PT Primastrans Tri Mandiri menyediakan layanan pengiriman berdasarkan barang yang akan diangkut. Hubungi kami <a href="/contact">di sini.</a></p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
              <div class="icon">
                <i class="dump dump-dump-truck"></i>
              </div>
              <h3>Dump Truck</h3>
            <p>Layanan angkutan barang berupa pasir, batu split, batubara menggunakan Dump Truck. Kami menyediakan beberapa truk dengan spesifikasi sebagai berikut:</p>
            <ul>
                <li>Truk 4 kubik dengan kapasitas XX ton hingga XX ton</li>
                <li>Truk 9 kubik dengan kapasitas XX ton hingga XX ton</li>
            </ul>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-truck"></i>
              </div>
              <h3>Box/Wingbox Truck</h3>
            <p>Layanan angkutan barang berupa produk menggunakan Box/Wingbox Truck. Kami menyediakan beberapa truk dengan spesifikasi sebagai berikut:</p>
            <ul>
                <li>Truk Box dengan kapasitas XX ton hingga XX ton</li>
                <li>Truk Wingbox dengan kapasitas XX ton hingga XX ton</li>
            </ul>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Services Section -->
@endsection