@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <div data-aos="fade-up" data-aos-duration="2000">
                <h1 class="hero-text"> POLKESMA PRODI D3 KEPERAWATAN (KAMPUS KAB. PONOROGO)</h1>
                <p>Beradab dan Berdaya Saing Global Dalam Upaya Promotif dan Preventif Keperawatan Diabetes Millitus </p>
                <a href="{{ route('landing.visi') }}" class="btn btn-success hero-btn">Visi dan Misi</a>
            </div>
        </div>
    </section>
    <div class="container mb-5">
        <h3 class="fw-bold text-center mb-5 mt-5"><span class="underline">Tentang Kampus</span></h3>
        <div class="row">
            <div class="col-md">
                <div class="card" data-aos="fade-right" data-aos-duration="2000">
                    <div class="card-body">
                        <center>
                            <div class="mx-auto" style="width: 70px;">
                                <button class="btn btn-secondary rounded-circle">
                                    <i class="fas fa-home"></i>
                                </button>
                            </div>
                        </center>
                        <h5 class="card-title text-center fw-bold mb-3 mt-3">Profil Kampus</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quaerat alias, autem explicabo,
                            nesciunt et rerum sed iusto repudiandae id natus eius facilis quibusdam distinctio, laborum sunt
                            numquam ipsum voluptatem?</p>
                        <a href="{{ route('landing.about') }}" type="button" class="btn btn-success w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card-body">
                        <center>
                            <div class="mx-auto" style="width: 70px;">
                                <button class="btn btn-secondary rounded-circle">
                                    <i class="fas fa-landmark"></i>
                                </button>
                            </div>
                        </center>
                        <h5 class="card-title text-center fw-bold mb-3 mt-3">Sejarah Kampus</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quaerat alias, autem explicabo,
                            nesciunt et rerum sed iusto repudiandae id natus eius facilis quibusdam distinctio, laborum sunt
                            numquam ipsum voluptatem?</p>
                        <a href="{{ route('landing.history') }}" type="button"
                            class="btn btn-success w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" data-aos="fade-left" data-aos-duration="2000">
                    <div class="card-body">
                        <center>
                            <div class="mx-auto" style="width: 70px;">
                                <button class="btn btn-secondary rounded-circle">
                                    <i class="fas fa-location-dot"></i>
                                </button>
                            </div>
                        </center>
                        <h5 class="card-title text-center fw-bold mb-3 mt-3">Lokasi Kampus</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quaerat alias, autem explicabo,
                            nesciunt et rerum sed iusto repudiandae id natus eius facilis quibusdam distinctio, laborum sunt
                            numquam ipsum voluptatem?</p>
                        <button type="button" class="btn btn-success w-100">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="gallery">
        <div class="hero-overlay-gallery">
            <h3 class="fw-bold text-center mb-5 mt-5"><span class="underline-white">Galeri Kampus</span></h3>
            <div class="row px-5" style="min-height: 300px;">
                @foreach ($gallery as $image)
                    <div class="col-md-4 mb-3">
                        <div class="card" data-aos="flip-left" data-aos-duration="2000">
                            <img src="{{ asset('storage/gallery/' . $image->image) }}" width="300px" height="200px"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-3 mb-4">
                <a href="{{ route('landing.gallery') }}" type="button" data-aos="zoom-in" data-aos-duration="2000"
                    class="btn btn-success w-30">Seluruh Galeri</a>
            </div>
        </div>
    </section>
    <h3 class="fw-bold text-center mb-5 mt-5" data-aos="fade-up" data-aos-duration="1000"><span class="underline">Berita
            Terbaru</span></h3>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($news as $item)
                <div class="col" data-aos="fade-in" data-aos-duration="2000">
                    <div class="card h-100">
                        <img src="{{ asset('storage/news/' . $item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($item->content), 200, '...') }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Diupload pada :
                                {{ $item->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4 mb-4">
            <a href="{{ route('landing.news') }}" type="button" data-aos="zoom-in" data-aos-duration="2000"
                class="btn btn-success w-30">Seluruh Berita</a>
        </div>
    </div>
    <h3 class="fw-bold text-center mb-5 mt-5" data-aos="fade-in" data-aos-duration="1000"><span
            class="underline">Testimoni</span></h3>
    <div class="container mb-5">
        <div class="row">
            @foreach ($testimoni as $item)
                <div class="col-md-4" data-aos="fade-in" data-aos-duration="2000">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/testimoni/' . $item->image) }}"
                                    class="img-fluid rounded-start" alt="{{ $item->name }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">{{ $item->content }}</p>
                                    <p>{{ 'Alumni ' . $item->year_entered }}</p>
                                    <p style="margin-top: -15px">{{ $item->company }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
            height: 100vh;
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

        .hero-btn {
            background-color: #28a745;
            border-color: #28a745;
        }

        .underline {
            display: inline-block;
            border-bottom: 2px solid black;
        }

        .underline-white {
            display: inline-block;
            border-bottom: 4px solid white;
        }

        .gallery {
            position: relative;
            background-color: #D6D5D5;
            background-size: cover;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-overlay-gallery {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #D6D5D5;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
    </style>
@endpush
