@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Layanan Daring</h1>
        </div>
    </section>
    <div class="container">
        <div class="row mt-5 mb-5 text-center justify-content-center">
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/v-lep.png') }}" class="w-10" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/admin_siakad.png') }}" class="w-10" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/siakad.png') }}" class="w-10" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/cbt.png') }}" class="w-10" alt="">
                </a>
            </div>
        </div>
        <div class="row mt-5 mb-5 text-center justify-content-center">
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/image_24.png') }}" class="w-10" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/skpi-1.png') }}" class="w-10" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/spmb-1.png') }}" class="w-10" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <img src="{{ asset('image/studi-1.png') }}" class="w-10" alt="">
                </a>
            </div>
            <button class="btn btn-success mt-5">Lebih Lanjut</button>
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
