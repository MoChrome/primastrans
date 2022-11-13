@extends('layouts.main')

@section('container')
    @include('partials/breadcrumbs')
    <section id="contacts" class="contacts section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Kontak Kami</h2>
                <p>Untuk pemesanan silahkan kunjungi kantor kami di alamat berikut atau hubungi kami melalui telepon atau
                    email</p>
            </div>
            <div class="row justify-content-around" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 col-md-4">
                    <div class="contact-item">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                        <h3>Alamat</h3>
                        <p>{{ $profile['address'] }}<br>
                            {{ $profile['address2'] }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="contact-item">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <h3>Telepon</h3>
                        <div class="row">
                            <div class="col">
                                <p>
                                    {{ $profile['contact'] }}<br>
                                    {{ $profile['contact2'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="contact-item">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                        <h3>Email</h3>
                        <div class="row">
                            <div class="col">
                                <p>
                                    {{ $profile['email'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
