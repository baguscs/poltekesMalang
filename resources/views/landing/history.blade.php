@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Profil Kampus</h1>
        </div>
    </section>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <p>
                    D3 Keperawatan Ponorogo merupakan salah satu dari PSDKU ( Program Studi Di luar Kampus Utama ) dari
                    Poltekkes Kemenkes Malang. Bergabung dengan Kampus utama pada bulan Agustus 2018 sesuai dengan SK
                    MenRisTek
                    Dikti no 683/KPT/I/2018 tentang
                    Izin Pembukaan Program studi Di Luar Kampus Utama tertanggal 21 Agustus 2018. D3 Keperawatan Ponorogo
                    sebelumnya mempunya nama Akper Pemkab Ponorogo yaitu Perguruan Tinggi Kesehatan milik Pemerintah Daerah
                    dibawah naungan Dinas Kesehatan Kabupaten Ponorogo, berdiri sejak 23 Februari 1999 berdasarkan Surat
                    Keputusan Kepala Pusat Pendidikan Tenaga Kesehatan Departemen Kesehatan RI Nomor HK.00.06.1.3.0419. dan
                    berdasarkan Keputusan Bupati Kepala Daerah Tingkat II Kabupaten Ponorogo Nomor 487 Tanggal 4 Oktober
                    1999
                    tentang Pembentukan Organisasi dan Tata Kerja Akademi\ Keperawatan Pemerintah Daerah Tingkat II
                    Kabupaten
                    Ponorogo.Berdasarkan UU NO 12 tahun 2012, Peraturan Pemerintah no 4 tahun 2014 dan Peraturan Pemerintah
                    no
                    13 tahun 2015, maka Akper Pemkab Ponorogo bergabung ke Potekkes Kemenkes Malang sebagai PSDKU dengan
                    nama
                    baru Poltekkes Kemenkes Malang Program Studi D3 Keperawatan Kampus Kabupaten Ponorogo.D3 Keperawatan
                    Kampus
                    Kab Ponorogo menempati tanah kurang lebih 6000 meter2 berlokasi di Jalandr. Ciptomangunkusumo no 82A ds.
                    Keniten Kecamatan Kota Kabupaten Ponorogo. Memiliki 5 Ruang Kelas, 10 Ruang Laboratorium , Perpustakaan,
                    Lapangan olah raga dan berbagai fasilitas guna mendukung proses pembelajaran,memiliki SDM Dosen dan
                    tenaga
                    kependidikan yang memadai dengan kualifikasi S1 dan S2 sesuai bidang dan unit kerjanya.
                </p>
            </div>
            <div class="col">
                <figure class="figure" data-aos="flip-left" data-aos-duration="2000">
                    <img src="{{ asset('image/about.png') }}" class="figure-img img-fluid rounded" alt="...">
                </figure>
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
    </style>
@endpush
