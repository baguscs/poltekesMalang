@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Berita</h1>
        </div>
    </section>
    <h3 class="fw-bold text-center mb-5 mt-5"><span class="underline">Berita Terbaru Kampus</span></h3>
    <div class="container my-5">
        <form class="d-flex justify-content-center" action="{{ route('landing.news.search') }}" method="GET" role="search">
            @csrf
            <input class="form-control me-2" style="width: 500px" name="search" type="search" placeholder="Cari berita"
                aria-label="Search">
            <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
        </form>
        @if ($news->isNotEmpty())
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                @foreach ($news as $item)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('storage/news/' . $item->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($item->content), 200, '...') }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('landing.news.detail', $item->slug) }}" type="button"
                                    class="btn btn-success w-100">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="col d-flex align-items-center justify-content-center mt-5">
                <div class="alert alert-warning w-50" role="alert">
                    <div class="text-center">
                        <i class="fa fa-exclamation-triangle"></i> Mohon maaf, data berita tidak ditemukan.
                    </div>
                </div>
            </div>
        @endif
        <nav aria-label="Page navigation example" style="margin-top: 40px">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $news->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $news->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $news->lastPage(); $i++)
                    <li class="page-item {{ $news->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $news->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $news->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $news->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
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
