@extends('layouts.app')

@section('title', 'Home - Digital Art Playground')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row align-items-center py-4 mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <span class="badge-tag mb-3 d-inline-block">Digital Art Gallery & Playground</span>
            <h1 class="display-4 fw-extrabold mb-4" style="letter-spacing: -0.04em; color: var(--text-dark);">
                Eksplorasi Mahakarya Seni Digital Tanpa Batas
            </h1>
            <p class="lead text-muted mb-4 mx-auto" style="max-width: 650px;">
                Menampilkan kurasi ilustrasi, concept art, dan digital painting dari seniman profesional dunia yang dibuat menggunakan software digital modern.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('digital_art.index') }}" class="btn btn-electric btn-lg px-4">Buka Galeri</a>
            </div>
        </div>
    </div>

    <!-- Featured Artworks Section -->
    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <span class="badge-coral mb-2 d-inline-block">Pilihan Kurator</span>
                <h3 class="fw-bold mb-0" style="letter-spacing: -0.02em;">Karya Unggulan</h3>
            </div>
            <a href="{{ route('digital_art.index') }}" class="text-decoration-none fw-semibold" style="color: var(--purple-electric);">Lihat Semua &rarr;</a>
        </div>

        <div class="row g-4">
            @foreach($featuredArtworks as $art)
            <div class="col-md-3">
                <div class="card card-playground h-100">
                    <div style="height: 220px; overflow: hidden; background: #e2e8f0;">
                        <img src="{{ asset($art->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $art->title }}">
                    </div>
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="fw-bold mb-1" style="font-size: 1.1rem;">{{ $art->title }}</h5>
                        <p class="text-muted small mb-3">Oleh {{ $art->artist }}</p>
                        <div class="mt-auto pt-2">
                            <a href="{{ route('digital_art.show', $art->id) }}" class="btn btn-outline-electric btn-sm w-100">Detail Karya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Student Identity Section -->
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <div class="card card-playground p-4 p-md-5 bg-white border-0 shadow-sm">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <span class="badge-tag mb-2 d-inline-block">Pengembang Aplikasi</span>
                        <h4 class="fw-bold mb-3">Informasi Akademik</h4>
                        <p class="text-muted mb-0">Project UTS Laravel dikembangkan sebagai pemenuhan tugas akademik mata kuliah terkait.</p>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0 border-start-md ps-md-4">
                        <p class="mb-1 small text-muted">Nama Pengembang</p>
                        <p class="fw-bold mb-2">Ivan Hilmi Hersony</p>
                        <p class="mb-1 small text-muted">Nomor Induk Mahasiswa</p>
                        <p class="fw-bold mb-2">251011701273</p>
                        <p class="mb-1 small text-muted">Program Studi</p>
                        <p class="fw-bold mb-0">Sistem Informasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection