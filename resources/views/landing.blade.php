@extends('layouts.landingpage')

@section('container')
    <section id="landings" class="landings">
        <div class="hero">
            <div class="info d-flex align-items-center">

                <div class="container">
                    <div class="row">
                        <h2 data-aos="fade-down" data-aos-delay="100">PRIMASTRANS TRI MANDIRI</h2>
                        <div class="col-lg-6 d-flex flex-row-reverse bd-highlight">
                            <div class="left">
                                <div class="icon-box d-flex position-relative " data-aos="fade-right" data-aos-delay="200">
                                    <div class="d-flex align-items-center">
                                        <h4><a href="/property" class="stretched-link">Primastrans Properties</a></h4>
                                    </div>
                                    <i class="bi bi-house-door flex-shrink-0"></i>
                                </div>
                            </div><!-- End Icon Box -->
                        </div>

                        <div class="col-lg-6">
                            <div class="right">
                                <div class="icon-box d-flex position-relative" data-aos="fade-left" data-aos-delay="400">
                                    <i class="bi bi-truck flex-shrink-0"></i>
                                    <div class="d-flex align-items-center">
                                        <h4><a href="/transport" class="stretched-link">Primastrans Transport</a></h4>
                                    </div>
                                </div><!-- End Icon Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
