@extends('layouts.dashboard.app')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Testimoni</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('home') }}"> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('testimoni.index') }}"> Testimoni</a></li>
            <li class="breadcrumb-item active">Edit Data</li>
        </ol>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus me-1"></i>
                    Edit Testimoni
                </div>
                <div class="card-body">
                    <form action="{{ route('testimoni.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ $item->name }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="year_in" class="form-label">Tahun Masuk</label>
                            <input type="year" class="form-control @error('year_in') is-invalid @enderror" id="year_in"
                                name="year_in" value="{{ $item->year_entered }}" required>
                            @error('year_in')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control @error('job') is-invalid @enderror" id="job"
                                name="job" value="{{ $item->company }}" required autofocus>
                            @error('job')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Testimoni</label>
                            <textarea class="form-control @error('testimoni') is-invalid @enderror" id="testimoni" name="testimoni" required>{{ $item->content }}</textarea>
                            @error('testimoni')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto Mahasiswa</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Lihat Gambar Saat Ini
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Foto Mahasiswa</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('storage/testimoni/' . $item->image) }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('testimoni.index') }}" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pageName')
    {{ __('Testimoni') }}
@endpush
@push('script')
@endpush
