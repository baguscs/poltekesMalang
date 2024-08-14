@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Legalisir IJazah</h1>
        </div>
    </section>
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold text-center mb-5 mt-2">Pemberitahuan</h3>
                Disampaikan kepada seluruh alumni, untuk legalisir ijazah dapat dilakukan dengan mengakses laman berikut:
                <p><a href="https://legalisir.poltekkes-malang.ac.id/">https://legalisir.poltekkes-malang.ac.id</a></p>

                <p>
                    Untuk tatacara dan informasi lebih lanjut , silakan mengacu pada dokumen yang dapat diakses melalui
                    laman berikut: <a
                        href="https://drive.google.com/file/d/1PK1RpGm3HRhtRFtaGahS0PoljN7LoZwk/view?usp=sharing">Disini</a>
                </p>
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
