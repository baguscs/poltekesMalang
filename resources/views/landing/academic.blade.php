@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Akademik</h1>
        </div>
    </section>
    <div class="container my-5">
        <div class="row">
            @foreach ($academic as $item)
                <div class="col-md-6">
                    <a href="{{ $item->attachment }}" class="text-decoration-none" target="_blank">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="mx-auto" style="width: 70px;">
                                        <button class="btn btn-secondary rounded-circle">
                                            <i class="fas fa-sticky-note"></i>
                                        </button>
                                    </div>
                                    <h4 class="mt-3 fw-bold">{{ $item->title }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
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
