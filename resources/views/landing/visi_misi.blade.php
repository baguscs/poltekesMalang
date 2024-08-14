@extends('layouts.landing.master')
@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <h1 class="hero-text" data-aos="fade-up" data-aos-duration="2000"> Visi dan Misi</h1>
        </div>
    </section>
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md">
                <div class="card" data-aos="fade-right" data-aos-duration="2000" style="height: 170px">
                    <div class="card-header fs-3 fw-bold text-center">
                        Visi
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Menjadi Program Studi Keperawatan Yang Beradab dan Berdaya Saing
                            Global Dalam
                            Upaya Promotif dan
                            Preventif Keperawatan DM</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" data-aos="fade-left" data-aos-duration="2000">
                    <div class="card-header fs-3 fw-bold text-center">
                        Misi
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ol>
                            <li>Menjalankan tata kellola organisasi yang baik</li>
                            <li>Mengembangkan kerjasama dan kemitraan di dalam negeri maupun luar negeri</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion accordion-flush mt-5 mb-5" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-center fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Tujuan
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ol>
                            <li>Menghasilkan perawat vokasi yang beradab, dan berdaya saing global khususnya dalam upaya
                                promotif dan
                                preventif keperawatan DM
                            </li>
                            <li>Meningkatkan publikasi karya ilmiah melalui jurnal nasional dan internasional</li>
                            <li>Meningkatkan karya pengabdian kepada masyarakat berbasis pada hasil penelitian</li>
                            <li>Melaksanakankan tatakelola organisasi yang baik</li>
                            <li>Melaksanakan kerjasama kemitraan dalam negeri maupun luar negeri</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-center fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Strategi
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="text-center">
                            Tiada kekayaan yang paling utama daripada kekayaan jiwa, tiada kepapaan yang
                            paling menyedihkan daripada kebodohan, dan tiada warisan yang paling baik daripada pendidikan.
                        </p>
                    </div>
                </div>
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
