@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Sertifikat Akreditasi</h1>
        </div>
    </section>
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold text-center mb-5 mt-2">Pemberitahuan</h3>
                Berikut Kami sampaikan link download terkait Sertifikat Akreditasi
                <ol>
                    <li>Sertifikat Akreditasi 1997 <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2021/07/akreditasi-1997.pdf">Klik
                            di Sini</a>, file foto <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2021/07/1997-foto.jpeg">
                            Klik di sini</a>
                    </li>
                    <li>
                        Sertifikat Akreditasi 2003 <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2021/07/SERTIFIKAT-AKREDITASI-2003.pdf">
                            Klik di sini</a>, file foto <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2021/07/2003-foto.jpeg">
                            Klik di sini</a>
                    </li>
                    <li>
                        Sertifikat Akreditasi 2009 <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2021/07/SERTIFIKAT-AKREDITASI-2009.pdf">
                            Klik di sini</a>, file foto <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2021/07/2009-foto.jpeg">
                            Klik di sini</a>
                    </li>
                    <li>
                        Sertifikat Akreditasi 2014 <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2020/10/AKREDITASI-KHUSUS-2014.pdf">
                            Klik di sini</a>
                    </li>
                    <li>
                        Sertifikat Akreditasi 2015 <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2020/10/SK_DAN_SERTIFIKAT-AKREDITASI_2014.pdf">
                            Klik di sini</a>
                    </li>
                    <li>
                        Sertifikat Akreditasi 2020 <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2021/07/SERTIFIKAT-AKREDITASI-D3-KEPERAWATAN-PONOROGO-2020.pdf">
                            Klik di sini</a>
                    </li>
                    <li>
                        SK Perpanjangan Akreditasi silakan <a
                            href="https://prodiponorogo.poltekkes-malang.ac.id/wp-content/uploads/2020/10/SK-perpanjangan-akreditasi2020.pdf">
                            Klik di sini</a> (Untuk Lulusan tahun 2020)
                    </li>
                </ol>
                <p>
                    Terkait Legalisir SK maupun Sertifikat Akreditasi Silakan mengacu pada surat dari LAM-PT pada link <a
                        href="https://drive.google.com/file/d/1demZOooU69IsYLOFGpYFfO7-P852FeFS/view?usp=sharing">berikut
                        ini</a> (Sumber: <a
                        href="https://lamptkes.org/unduhan/PERATURAN%20MENGENAI%20PERMOHONAN%20LEGALISIR-SCAN.pdf">LAMPTKES</a>)
                </p>
                <p>
                    Untuk Sertifikat Akreditasi yang dikeluarkan oleh PUSDIK NAKES, legalisir dapat dilakukan di Kampus
                    Poltekkes Malang dengan mengacu pada petunjuk yang dapat diunduh pada
                    <a href="https://drive.google.com/file/d/1sav6KarJHuATEKHmZmRbwvshUZ8_LY1F/view">Link ini</a>
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
