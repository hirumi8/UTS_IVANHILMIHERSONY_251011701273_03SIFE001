@extends('layouts.app')

@section('title', $digitalArt->title . ' - Digital Art Playground')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ route('digital_art.index') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">&larr; Kembali ke Galeri</a>
        </div>
    </div>

    <div class="card card-playground border-0 p-4 p-md-5 bg-white shadow-sm">
        <div class="row g-5 align-items-center">
            <!-- Artwork Image Column -->
            <div class="col-lg-7">
                <div class="rounded-4 overflow-hidden shadow-sm" style="background: #f8fafc; max-height: 600px;">
                    <img src="{{ asset($digitalArt->image) }}" class="img-fluid w-100 object-fit-contain" alt="{{ $digitalArt->title }}">
                </div>
            </div>

            <!-- Artwork Metadata Column -->
            <div class="col-lg-5 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge-tag mb-3 d-inline-block">{{ $digitalArt->software_used }}</span>
                    <h1 class="fw-extrabold mb-2" style="font-size: 2rem; letter-spacing: -0.03em;">{{ $digitalArt->title }}</h1>
                    <p class="text-muted fs-5 mb-4">Karya dari <strong class="text-dark">{{ $digitalArt->artist }}</strong></p>

                    <div class="card border-0 bg-light p-3 rounded-4 mb-4">
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span class="text-muted small fw-medium">Resolusi File</span>
                            <span class="fw-bold small">{{ $digitalArt->resolution }}</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span class="text-muted small fw-medium">Software Utama</span>
                            <span class="fw-bold small">{{ $digitalArt->software_used }}</span>
                        </div>
                        <div class="d-flex justify-content-between py-2">
                            <span class="text-muted small fw-medium">Harga Akses Digital</span>
                            <span class="fw-bold text-success">Rp {{ number_format($digitalArt->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="{{ route('digital_art.index') }}" class="btn btn-electric w-100 py-3">Jelajahi Karya Lainnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection