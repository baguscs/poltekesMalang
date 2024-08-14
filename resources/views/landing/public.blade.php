@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Layanan Publik</h1>
        </div>
    </section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('landing.legalisir') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="mx-auto" style="width: 70px;">
                                    <button class="btn btn-secondary rounded-circle">
                                        <i class="fas fa-sticky-note"></i>
                                    </button>
                                </div>
                                <h4 class="mt-3 fw-bold">Legalisir Ijazah</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('landing.akreditasi') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="mx-auto" style="width: 70px;">
                                    <button class="btn btn-secondary rounded-circle">
                                        <i class="fas fa-sticky-note"></i>
                                    </button>
                                </div>
                                <h4 class="mt-3 fw-bold">Serfikat Akreditasi</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2020/11/SK-PSDKU-PONOROGO.pdf"
                    target="_blank">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="mx-auto" style="width: 70px;">
                                    <button class="btn btn-secondary rounded-circle">
                                        <i class="fas fa-sticky-note"></i>
                                    </button>
                                </div>
                                <h4 class="mt-3 fw-bold">SK Pendirian</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <style>
        .hero {
            position: relative;
            background: url('/image/hero1.png') no-repeat center center;
            background-size: cover;
            height: 70vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .hero-text {
            margin-bottom: 20px;
        }

        .underline {
            display: inline-block;
            border-bottom: 2px solid black;
        }
    </style>
@endpush
