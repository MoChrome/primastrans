@extends('layouts.main')

@section('container')
    @include('partials.breadcrumbs')
    <main id="main">

        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 img-bg" style="background-image: url({{ asset('img/home-profile.jpg') }});"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h3>PT Primastrans Tri Mandiri</h3>
                        <p>PT Primastrans Tri Mandiri merupakan perusahaan yang bergerak dibidang angkutan darat yang
                            berbasis di Kota Tasikmalaya
                            dan beroperasi di wilayah Jawa Barat. Kami menyediakan layanan angkutan darat menggunakan truk
                            box/wingbox dan truk dump.</p>
                        <p>PT Primastrans Tri Mandiri didirikan berdasarkan akta tanggal 2 Februari 2016 No. 52 yang dibuat
                            dihadapan
                            Heri Hendriyana, S.H., M.H, Notaris di Kota Tasikmalaya. Akta pendirian tersebut telah mendapat
                            pengesahan
                            dari Menteri Hukum dan Hak Asasi Manusia Republik Indonesia melalui Surat Keputusan tanggal 9
                            Februari 2016
                            Nomor AHU-0007246.AH.01.01.Tahun 2016</p>

                    </div>
                </div>
            </div>
        </section><!-- End Alt Services Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="projects" class="projects section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Gallery</h2>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-team">Our Team</li>
                        <li data-filter=".filter-truck">Truck</li>
                        <li data-filter=".filter-inspection">Inspection</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-team">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('/img/gallery/team-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Team 1</h4>
                                    <a href="{{ asset('/img/gallery/team-1.jpg') }}" data-gallery="portfolio-gallery-team"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-truck">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/truck-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Truck 1</h4>
                                    <a href="{{ asset('img/gallery/truck-1.jpg') }}" data-gallery="portfolio-gallery-truck"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-inspection">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/inspection-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Inspection 1</h4>
                                    <a href="{{ asset('img/gallery/inspection-1.jpg') }}"
                                        data-gallery="portfolio-gallery-inspection" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-team">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('/img/gallery/team-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Team 2</h4>
                                    <a href="{{ asset('/img/gallery/team-2.jpg') }}" data-gallery="portfolio-gallery-team"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-truck">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/truck-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Truck 2</h4>
                                    <a href="{{ asset('img/gallery/truck-2.jpg') }}" data-gallery="portfolio-gallery-truck"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-inspection">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/inspection-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Inspection 2</h4>
                                    <a href="{{ asset('img/gallery/inspection-2.jpg') }}"
                                        data-gallery="portfolio-gallery-inspection" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-truck">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/truck-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Truck 3</h4>
                                    <a href="{{ asset('img/gallery/truck-3.jpg') }}" data-gallery="portfolio-gallery-truck"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-team">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('/img/gallery/team-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Team 3</h4>
                                    <a href="{{ asset('/img/gallery/team-3.jpg') }}"
                                        data-gallery="portfolio-gallery-team" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-inspection">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/inspection-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Inspection 3</h4>
                                    <a href="{{ asset('img/gallery/inspection-3.jpg') }}"
                                        data-gallery="portfolio-gallery-inspection" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-truck">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/truck-4.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Truck 4</h4>
                                    <a href="{{ asset('img/gallery/truck-4.jpg') }}"
                                        data-gallery="portfolio-gallery-truck" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-team">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('/img/gallery/team-4.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Team 4</h4>
                                    <a href="{{ asset('/img/gallery/team-4.jpg') }}"
                                        data-gallery="portfolio-gallery-team" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-inspection">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/inspection-4.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Inspection 4</h4>
                                    <a href="{{ asset('img/gallery/inspection-4.jpg') }}"
                                        data-gallery="portfolio-gallery-inspection" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-inspection">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/inspection-5.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Inspection 5</h4>
                                    <a href="{{ asset('img/gallery/inspection-5.jpg') }}"
                                        data-gallery="portfolio-gallery-inspection" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-truck">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/truck-5.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Truck 5</h4>
                                    <a href="{{ asset('img/gallery/truck-5.jpg') }}"
                                        data-gallery="portfolio-gallery-truck" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-inspection">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/inspection-6.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Inspection 6</h4>
                                    <a href="{{ asset('img/gallery/inspection-6.jpg') }}"
                                        data-gallery="portfolio-gallery-inspection" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-truck">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/gallery/truck-6.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Truck 6</h4>
                                    <a href="{{ asset('img/gallery/truck-6.jpg') }}"
                                        data-gallery="portfolio-gallery-truck" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                    </div>
                </div>
        </section><!-- End Our Projects Section -->
    </main>
@endsection
