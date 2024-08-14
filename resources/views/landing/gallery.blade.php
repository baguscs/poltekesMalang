@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text"> Galeri Kampus</h1>
        </div>
    </section>
    <div class="container mb-4 mt-5">
        <div class="row">
            @foreach ($gallery as $item)
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/gallery/' . $item->image) }}" class="img-fluid rounded-start"
                                    alt="{{ $item->slug }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ Str::limit(strip_tags($item->description), 200, '...') }}</p>
                                    <a href="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $item->id }}">Lihat Foto</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->title }}
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('storage/gallery/' . $item->image) }}"
                                                        class="img-fluid" alt="{{ $item->slug }}">

                                                    <p class="mt-3">{{ $item->description }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <nav aria-label="Page navigation example" style="margin-top: 40px">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $gallery->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $gallery->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $gallery->lastPage(); $i++)
                    <li class="page-item {{ $gallery->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $gallery->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $gallery->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $gallery->nextPageUrl() }}" aria-label="Next">
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
