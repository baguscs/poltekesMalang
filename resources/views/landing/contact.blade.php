@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Kontak</h1>
        </div>
    </section>
    <h3 class="fw-bold text-center mb-5 mt-5"><span class="underline">Kontak Kami</span></h3>
    <div class="container mb-5" data-aos="fade-up" data-aos-duration="1500">
        <form action="" method="">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama"
                        required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email"
                        required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan No. Telp"
                        required>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
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
