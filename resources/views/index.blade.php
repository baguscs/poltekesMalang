@extends('layouts.landing.master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/hero1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/hero2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/hero3.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="hero-overlay">
            <div data-aos="fade-up" data-aos-duration="2000">
                <h1 class="hero-text"> {{ $profile->title }}</h1>
                <p>{{ $profile->motto }}</p>
                <a href="{{ route('landing.visi') }}" class="btn btn-success hero-btn">Visi dan Misi</a>
            </div>
        </div>
    </div>
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
    <h3 class="fw-bold text-center mb-5 mt-5"><span class="underline">Kontak Kami</span></h3>
    <div class="container mb-5" data-aos="fade-up" data-aos-duration="1500">
        <form action="#" method="#">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                        placeholder="Masukkan Nama" value="{{ old('name') }}">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                    <input type="number" name="phone" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan No. Telp" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3">{{ old('message') }}</textarea>
            </div>
            <center>
                <button type="submit" class="btn btn-success w-25" onclick="alert('Pesan Terkirim')">Kirim</button>
            </center>
        </form>
        <div class="row mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11356.80647889465!2d111.46300645761414!3d-7.855384818716134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e799f86ba944c69%3A0x67cfddcfa69c0952!2sPoltekkes%20Malang%20Kampus%20VI%20Ponorogo!5e0!3m2!1sid!2sid!4v1723275069845!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
@push('style')
    <style>
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            color: #ffff;
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
