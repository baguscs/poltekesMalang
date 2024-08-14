@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text"> Detail Berita dan Artikel</h1>
        </div>
    </section>
    <div class="container mb-4 mt-5">
        <h3 class="fw-bold text-center mb-5 mt-5"><span class="underline-white">{{ $news->title }}</span></h3>
        <div class="row">
            <div class="col-md-8">
                {{ $news->content }}
            </div>
            <div class="col-md-4">
                <figure class="figure">
                    <img src="{{ asset('storage/news/' . $news->image) }}" class="figure-img img-fluid rounded"
                        alt="...">
                </figure>
            </div>
        </div>

        <div class="mt-3">
            <h5 class="fw-bold">Dibuat oleh: {{ $news->user->name }}</h5>
            <h5 class="fw-bold">Dipublikasi pada: {{ date('d F Y', strtotime($news->created_at)) }}</h5>
        </div>
        <br>
        <a href="{{ route('landing.news') }}" class="btn btn-danger">Kembali</a>
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
