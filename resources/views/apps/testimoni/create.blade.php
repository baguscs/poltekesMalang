@extends('layouts.dashboard.app')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Testimoni</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('home') }}"> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('testimoni.index') }}"> Testimoni</a></li>
            <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus me-1"></i>
                    Tambah Testimoni
                </div>
                <div class="card-body">
                    <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="year_in" class="form-label">Tahun Masuk</label>
                            <input type="year" class="form-control @error('year_in') is-invalid @enderror" id="year_in"
                                name="year_in" value="{{ old('year_in') }}" required>
                            @error('year_in')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control @error('job') is-invalid @enderror" id="job"
                                name="job" value="{{ old('job') }}" required autofocus>
                            @error('job')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Testimoni</label>
                            <textarea class="form-control @error('testimoni') is-invalid @enderror" id="testimoni" name="testimoni" required>{{ old('testimoni') }}</textarea>
                            @error('testimoni')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto Mahasiswa</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image" required>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
