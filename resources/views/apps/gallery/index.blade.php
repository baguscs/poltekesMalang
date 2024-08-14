@extends('layouts.dashboard.app')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Galeri Kampus</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('home') }}"> Dashboard</a></li>
            <li class="breadcrumb-item active">Galeri</li>
        </ol>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Galeri
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary float-end"><i class="fas fa-plus"></i>
                        Tambah Data</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Pembuat</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gallery as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ Str::limit(strip_tags($item->description), 30, '...') }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fas fa-edit"></i> Edit</a>
                                        <form action="{{ route('gallery.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus galeri {{ $item->title }}?')"><i
                                                    class="fas fa-trash"></i>
                                                Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pageName')
    {{ __('Gallery') }}
@endpush
@push('script')
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
    </script>
@endpush
