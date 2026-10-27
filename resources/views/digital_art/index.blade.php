@extends('layouts.app')

@section('title', 'Daftar Karya - Digital Art Playground')

@section('content')
<div class="container">
    <div class="row mb-5 align-items-center">
        <div class="col-lg-8">
            <span class="badge-tag mb-2 d-inline-block">Koleksi Lengkap</span>
            <h2 class="fw-bold display-6 mb-2" style="letter-spacing: -0.03em;">Eksplorasi Galeri Digital</h2>
            <p class="text-muted mb-0">Seluruh karya seni digital terverifikasi dari database dengan standar resolusi tinggi.</p>
        </div>
    </div>

    <div class="row g-4">
        @forelse($artworks as $art)
        <div class="col-md-3">
            <div class="card card-playground h-100">
                <div style="height: 220px; overflow: hidden; background: #e2e8f0;">
                    <img src="{{ asset($art->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $art->title }}">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="mb-2">
                        <span class="badge-tag" style="font-size: 0.65rem; padding: 0.2rem 0.6rem;">{{ $art->software_used }}</span>
                    </div>
                    <h5 class="fw-bold mb-1" style="font-size: 1.05rem;">{{ $art->title }}</h5>
                    <p class="text-muted small mb-3">Oleh {{ $art->artist }}</p>

                    <div class="mt-auto">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="small text-muted">Akses Digital</span>
                            <span class="fw-bold text-dark">Rp {{ number_format($art->price, 0, ',', '.') }}</span>
                        </div>
                        <a href="{{ route('digital_art.show', $art->id) }}" class="btn btn-electric btn-sm w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="card card-playground p-5 text-center">
                <p class="text-muted mb-0">Belum ada karya seni digital yang tersedia dalam database.</p>
            </div>
        </div>
        @endforelse
    </div>

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            {{ $artworks->links() }}
        </div>
    </div>
</div>
@endsection